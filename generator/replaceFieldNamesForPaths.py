import json
import os
import argparse


def traverse_and_replace(obj, path, new_field_name):
        if len(path) == 1:
            if path[0] in obj:
                keys = list(obj.keys())
                index = keys.index(path[0])
                obj[new_field_name] = obj.pop(path[0])
                keys = list(obj.keys())  # Update keys after replacing the key
                reordered = {k: obj[k] for k in keys[:index] + [new_field_name] + keys[index:]}
                obj.clear()
                obj.update(reordered)
        else:
            if path[0] in obj and isinstance(obj[path[0]], dict):
                traverse_and_replace(obj[path[0]], path[1:], new_field_name)
            elif path[0] in obj and isinstance(obj[path[0]], list):
                if len(path) > 1 and isinstance(path[1], int) and path[1] < len(obj[path[0]]):
                    traverse_and_replace(obj[path[0]][path[1]], path[2:], new_field_name)

def replace_field_names(input_file_path, output_file_path, changes):
    """
    Replace field names in the JSON file based on the given changes.

    :param input_file: Path to the input JSON file.
    :param output_file: Path to the output JSON file.
    :param changes: List of dictionaries containing paths and new field names.
    """
    
    with open(input_file_path, 'r', encoding='utf-8') as file:
        data = json.load(file)

    for change in changes:
        key_path = change['path']
        new_field_name = change['new_name']
        traverse_and_replace(data, key_path, new_field_name)

    with open(output_file_path, 'w', encoding='utf-8') as file:
        json.dump(data, file, indent=4)

def convert_input_paths_to_changes(input_paths):
        """
        Convert input paths to a list of changes with parsed paths and new field names.

        :param input_paths: List of dictionaries containing string paths and new field names.
        :return: List of dictionaries with parsed paths and new field names.
        """
        changes = []
        for item in input_paths:
            path_str = item["path"]
            path_parts = []
            for part in path_str.split('.'):
                if '[' in part and ']' in part:
                    field, index = part.split('[')
                    path_parts.append(field)
                    path_parts.append(int(index.strip(']')))
                else:
                    path_parts.append(part)
            changes.append({
                "path": path_parts,
                "new_name": item["new_field_name"]
            })
        return changes


if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Replace field names in a JSON file.")
    parser.add_argument("-i", "--input", help="Path to the input JSON file.")
    parser.add_argument("-o", "--output", help="Path to the output JSON file.")
    args = parser.parse_args()

    input_file = args.input if args.input else "cybersource-rest-spec.json"

    output_file = args.output if args.output else "cybersource-rest-spec-output.json"
    

    inputPaths =[
         {
            "path": "paths./ipl/v2/payment-links.get.responses.200.schema.properties.links",
            "new_field_name": "sdkLinks"
        }

        # example of how to add more paths
        # ,{
        #     "path": "paths./pts/v2/payments.post.parameters[0].schema.properties.clientReferenceInformation.properties.code",
        #     "new_field_name": "sdkCode"
        # }
    ]

    # Convert inputPaths to changes
    changes = convert_input_paths_to_changes(inputPaths)

    script_dir = os.path.dirname(os.path.abspath(__file__))
    input_file_path = os.path.join(script_dir, input_file)
    output_file_path = os.path.join(script_dir, output_file)
    replace_field_names(input_file_path, output_file_path, changes)