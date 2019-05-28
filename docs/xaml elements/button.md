# Button

## Attributes

| Name         |  Type      |  Description                          |  Examples                   |
|--------------|------------|---------------------------------------|-----------------------------|
|  name        |  String    |  Name of element                      |  addfriend_button           |
|  group       |  String    |  Name of group                        |  chat_channel_window        |
|  x           |  Distance  |  X position (horizontal plane)        |  1.5h, -5h, 25, 0           |
|  y           |  Distance  |  Y position (vertical plane)          |  1.5h, -5h, 25, 0           |
|  height      |  Distance  |  Height of element                    |  1.5h, -5h, 250, 75%        |
|  width       |  Distance  |  Width of element                     |  1.5h, -5h, 250, 75%        |
|  align       |  Enum      |  Horizontal alignment                 |  right, left, center        |
|  valign      |  Enum      |  Vertical alignment                   |  top, bottom, center        |
|  font        |  Enum      |  Font type and size                   |  dyn_10, dyn_12, dyn_9      |
|  texture     |  File path |  Texture/image to use as background   |  /ui/info/header_bar_tl.tga |
|  visible     |  Boolean   |  Visibility status                    |  true, false, 1, 0          |
|  color       |  Color     |  Background color                     |  invisible, #FFFFFF         |
|  watch       |  Trigger   |  Trigger to watch                     |  ChatUserEvent              |
|  enabled     |  Boolean   |  True for enabled, false for disabled |  true, false, 1, 0          |
|  hotkey      |  Enum      |  Hotkey to temporarily assign         |  ESC                        |
|  interactive |  Boolean   |                                       |  true, false, 1, 0          |