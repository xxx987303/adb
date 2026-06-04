import re

# Define the strings
string1 = "chrome safari"
string2 = "safari"

# Define the regular expression pattern
pattern = r'^safari$'

# Match the pattern against the strings
match1 = re.match(pattern, string1)
match2 = re.match(pattern, string2)

# Check if the pattern matched
print(bool(match1))  # Output: False
print(bool(match2))  # Output: True
