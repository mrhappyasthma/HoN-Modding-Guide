# Table

## Description

Related [UICmdList](uicmdlist.md) functions: 

- `AppendData(?,*string* data1,*string* data2,...) `
- `ClearData() `
- `Data(?) `
- `GetData(*int* col,*int* row) `

- `GetCellPositionX(*int* col,*int* row) `
- `GetCellPositionY(*int* col,*int* row) `
- `SetCell(*int* col,*int* row,*string* data) `

- `SortByCol(*int* col) `
- `SortByColReverse(*int* col) `
- `SortByColNum(*int* col) `
- `SortByColNumReverse(*int* col) `

## Attributes

| Name                |  Type      |  Description                                                 |  Examples            |
|---------------------|------------|--------------------------------------------------------------|----------------------|
|  name               |  String    |  Name of element                                             |  addfriend_button    |
|  x                  |  Distance  |  X position (horizontal plane)                               |  1.5h, -5h, 25, 0    |
|  y                  |  Distance  |  Y position (vertical plane)                                 |  1.5h, -5h, 25, 0    |
|  width              |  Distance  |  Width of element                                            |  1.5h, -5h, 250, 75% |
|  height             |  Distance  |  Height of element                                           |  1.5h, -5h, 250, 75% |
|  handleheight       |  Distance  |  Height of handle. (Handle is the blob inside the scrollbar) |  2.0h, 24, 100%      |
|  handlewidth        |  Distance  |  Width of handle. (Handle is the blob inside the scrollbar)  |  12, 2h, 100%        |
|  usescrollbars      |  Boolean   |                                                              |  true, false, 1, 0   |
|  exteriorscrollbars |  Boolean   |  Exterior scroll bars shown                                  |  true, false, 1, 0   |
| headings            |            |                                                              |                      |
| headingid           |            |                                                              |                      |
| cols                |            |                                                              |                      |
| rowheight           |            |                                                              |                      |
| headingcolor        |            |                                                              |                      |
| altrowcolor         |            |                                                              |                      |
| extendable          |            |                                                              |                      |
| autosort            |            |                                                              |                      |