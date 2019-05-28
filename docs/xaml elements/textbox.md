# Textbox

## Attributes

| Name        |  Type      |  Description                   |  Examples              |
|-------------|------------|--------------------------------|------------------------|
|  name       |  String    |  Name of element               |  addfriend_button      |
|  group      |  String    |  Name of group                 |  chat_channel_window   |
|  x          |  Distance  |  X position (horizontal plane) |  1.5h, -5h, 25, 0      |
|  y          |  Distance  |  Y position (vertical plane)   |  1.5h, -5h, 25, 0      |
|  width      |  Distance  |  Width of element              |  1.5h, -5h, 250, 75%   |
|  height     |  Distance  |  Height of element             |  1.5h, -5h, 250, 75%   |
|  align      |  Enum      |  Horizontal alignment          |  right, left, center   |
|  valign     |  Enum      |  Vertical alignment            |  top, bottom, center   |
|  maxlength  |  Integer   |  Maximum number of characters  |  300, 16, 250          |
|  textalign  |  Enum      |  Horizontal alignment of text  |  right, left, center   |
|  textvalign |  Enum      |  Vertical alignment of text    |  top, bottom, center   |
|  taborder   |  Integer   |                                |  5                     |
|  font       |  Enum      |  Font type and size            |  dyn_10, dyn_12, dyn_9 |
|  textcolor  |  Color     |  Color of text                 |  white, black          |
|  shadow     |  Boolean   |  Display shadow                |  true, false, 1, 0     |
|  color      |  Color     |  Background color              |  invisible, #FFFFFF    |
|  watch      |  Trigger   |  Trigger to watch              |  ChatUserEvent         |