# Floater

## Attributes

| Name             |  Type      |  Description                                                       |  Examples            |
|------------------|------------|--------------------------------------------------------------------|----------------------|
|  x               |  Distance  |  X position (horizontal plane)                                     |  1.5h, -5h, 25, 0    |
|  y               |  Distance  |  Y position (vertical plane)                                       |  1.5h, -5h, 25, 0    |
|  width           |  Distance  |  Width of element                                                  |  1.5h, -5h, 250, 75% |
|  height          |  Distance  |  Height of element                                                 |  1.5h, -5h, 250, 75% |
|  align           |  Enum      |  Horizontal alignment                                              |  right, left, center |
|  valign          |  Enum      |  Vertical alignment                                                |  top, bottom, center |
|  color           |  Color     |  Background color                                                  |  invisible, #FFFFFF  |
|  passivechildren |  Boolean   |  All the children of this element are unclickable (noclick="true") |  true, false, 1, 0   |
|  grow            |  Boolean   |  Allow element to grow                                             |  true, false, 1, 0   |
|  watch           |  Trigger   |  Trigger to watch                                                  |  ChatUserEvent       |