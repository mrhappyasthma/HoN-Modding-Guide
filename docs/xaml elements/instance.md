# Instance

## Description

The XAML `instance` element calls a corresponding [template](template.md) object, 
modifying any variables the implementation requires and sending the 
template various variables in the process.  Because each of these 
variable names is specific to the template naming scheme the instance 
relies on, it would be imprudent to compile a list of every attribute 
used.  The only attribute required when defining an instance is the **name** of the template being called:

## Attributes

| Name  |  Type   |  Description     |  Examples         |
|-------|---------|------------------|-------------------|
|  name |  String |  Name of element |  addfriend_button |