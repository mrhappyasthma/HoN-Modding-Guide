# CVarLabel

## Attributes

| Name        |  Type      |  Description                   |  Examples            |
|-------------|------------|--------------------------------|----------------------|
|  name       |  String    |  Name of element               |  addfriend_button    |
|  group      |  String    |  Name of group                 |  chat_channel_window |
|  x          |  Distance  |  X position (horizontal plane) |  1.5h, -5h, 25, 0    |
|  y          |  Distance  |  Y position (vertical plane)   |  1.5h, -5h, 25, 0    |
|  width      |  Distance  |  Width of element              |  1.5h, -5h, 250, 75% |
|  height     |  Distance  |  Height of element             |  1.5h, -5h, 250, 75% |
|  textalign  |  Enum      |  Horizontal alignment of text  |  right, left, center |
|  textvalign |  Enum      |  Vertical alignment of text    |  top, bottom, center |
|  color      |  Color     |  Background color              |  invisible, #FFFFFF  |
|  shadow     |  Boolean   |  Display shadow                |  true, false, 1, 0   |
|  prefix     |  String    |  Cvar prefix                   |  {label}             |
|  cvar       |  String    |  Cvar to assign to element     |  cg_displayLevelup   |