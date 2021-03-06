# Console Variables (cvars)

Console Variables (cvars) are pieces of data temporarily stored in memory to hold reference to specific values.

## Variable Types

- `bool` (Boolean) *-- A simple true or false.* *
- `float` (Floating Point) -- *An Arbitrary real number (i.e. a decimal number)*
- `int` (Integer)-- *An integer number, either positive or negative (i.e. a whole number)*
- `uint` (Unsigned Integer) -- *An unsigned integer number. (The same as an `int` but only positive values)*
- `string` *-- A series of characters.* (i.e. "some string" is an example of a string)
- `vec3` (3-Dimensional Vector) -- *A group of 3 `float` values that make up a Vector.*
- `vec4` (4-Dimensional Vector) -- *A group of 4 `float` values that make up a Vector.*



*Boolean attributes are assigned as follows:

- `true` or `1` for **true**
- `false` or `0` for **false**
- Any other number besides `0` will be interpreted as **true** (not recommended for use in code)
- Any other character sequence besides `true` will be interpreted as **false** (not recommended for use in code)

## Variable List

The list of cvars can be printed using the console command `cvarlist`.