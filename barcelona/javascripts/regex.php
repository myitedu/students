<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
Here's a comparison of common regular expression (regex) functions in both JavaScript and Python, along with sample code for each.

|Operation**             |JavaScript**                                  |Python**                                      |Example in JavaScript**                                                                                                                                              |Example in Python**                                                                                                       |
|---------------------------|-------------------------------------------------|-------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------------------|
|Create a regex**         | let regex = /pattern/flags;                  | import re<br>regex = re.compile("pattern", flags)| let regex = /hello/i; (Case-insensitive matching for "hello")                                                                                                       | import re<br>regex = re.compile("hello", re.IGNORECASE) (Case-insensitive matching for "hello")                         |
|Test for match**         | regex.test(str);                             | regex.search(str)                            | let regex = /hello/i; let result = regex.test("Hello"); console.log(result); // true                                                                                 | import re<br>regex = re.compile("hello", re.IGNORECASE)<br>result = regex.search("Hello"); print(bool(result)) # True |
|Find all matches**       | str.match(/pattern/g);                       | re.findall(pattern, str)                     | let str = "hello world, hello"; let matches = str.match(/hello/g); console.log(matches); // ["hello", "hello"]                                                       | import re<br>matches = re.findall("hello", "hello world, hello"); print(matches) # ['hello', 'hello']                   |
|Search for match**       | str.search(/pattern/);                       | re.search(pattern, str)                      | let str = "hello world"; let index = str.search(/world/); console.log(index); // 6                                                                                   | import re<br>result = re.search("world", "hello world"); print(result.start()) # 6                                      |
|Replace matches**        | str.replace(/pattern/, "replacement");        | re.sub(pattern, "replacement", str)          | let str = "hello world"; let newStr = str.replace(/hello/, "hi"); console.log(newStr); // "hi world"                                                                 | import re<br>new_str = re.sub("hello", "hi", "hello world"); print(new_str) # hi world                                  |
|Split string by regex**  | str.split(/pattern/);                        | re.split(pattern, str)                       | let str = "1,2,3"; let result = str.split(/,/); console.log(result); // ["1", "2", "3"]                                                                              | import re<br>result = re.split(",", "1,2,3"); print(result) # ['1', '2', '3']                                           |
|Group matches**          | str.match(/(\w+)\s(\w+)/);                   | regex.match(str).groups()                    | let str = "first last"; let matches = str.match(/(\w+)\s(\w+)/); console.log(matches[1], matches[2]); // "first", "last"                                             | import re<br>regex = re.compile(r"(\w+)\s(\w+)")<br>result = regex.search("first last"); print(result.groups()) # ('first', 'last') |
|Non-capturing groups**   | (?:pattern)                                  | (?:pattern)                                  | let str = "abc123"; let regex = /(?:abc)(\d+)/; let matches = str.match(regex); console.log(matches[1]); // "123"                                                    | import re<br>regex = re.compile(r"(?:abc)(\d+)")<br>result = regex.search("abc123"); print(result.group(1)) # 123     |
|Lookahead**              | (?=pattern)                                  | (?=pattern)                                  | let regex = /hello(?=\sworld)/; let result = regex.test("hello world"); console.log(result); // true                                                                 | import re<br>regex = re.compile(r"hello(?=\sworld)")<br>result = regex.search("hello world"); print(bool(result)) # True|
|Lookbehind**             | (?<=pattern)                                 | (?<=pattern)                                 | let regex = /(?<=hello\s)world/; let result = regex.test("hello world"); console.log(result); // true                                                                | import re<br>regex = re.compile(r"(?<=hello\s)world")<br>result = regex.search("hello world"); print(bool(result)) # True |
|Negative lookahead**     | (?!pattern)                                  | (?!pattern)                                  | let regex = /hello(?!\sworld)/; let result = regex.test("hello there"); console.log(result); // true                                                                 | import re<br>regex = re.compile(r"hello(?!\sworld)")<br>result = regex.search("hello there"); print(bool(result)) # True|
|Negative lookbehind**    | (?<!pattern)                                 | (?<!pattern)                                 | let regex = /(?<!good\s)morning/; let result = regex.test("bad morning"); console.log(result); // true                                                               | import re<br>regex = re.compile(r"(?<!good\s)morning")<br>result = regex.search("bad morning"); print(bool(result)) # True|

 Sample Code:

 JavaScript Example (Basic Usage):
javascript
let regex = /hello/i; // Create a case-insensitive regex for 'hello'
let str = "Hello world";
console.log(regex.test(str)); // true

let matches = str.match(/hello/g); // Find all occurrences of 'hello'
console.log(matches); // ["Hello"]

let newStr = str.replace(/hello/i, "hi"); // Replace 'hello' with 'hi'
console.log(newStr); // "hi world"


 Python Example (Basic Usage):
python
import re

regex = re.compile("hello", re.IGNORECASE)  # Create a case-insensitive regex for 'hello'
str = "Hello world"
print(bool(regex.search(str)))  # True

matches = re.findall("hello", str)  # Find all occurrences of 'hello'
print(matches)  # ['Hello']

new_str = re.sub("hello", "hi", str)  # Replace 'hello' with 'hi'
print(new_str)  # "hi world"


 Key Differences:
-Regex Creation**: In JavaScript, regex is created using slashes (/pattern/flags). In Python, you use the re module and re.compile() to compile regex patterns with flags.
-Matching Functions**: JavaScript uses test() for a quick boolean check, while Python uses search() for finding the first match and returning a match object.
-Flags**: Flags like case-insensitive matching (i in JavaScript, re.IGNORECASE in Python) are similar but are applied differently (/pattern/i in JavaScript, re.compile("pattern", re.IGNORECASE) in Python).

Let me know if you'd like further details or additional regex operations!
</pre>
</body>
</html>