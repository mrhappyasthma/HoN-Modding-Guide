# HoN Mod Manager

## About HoN Mod Manager

For more details, see the original post [here](<https://forums.heroesofnewerth.com/showthread.php?596451-HoN-Modification-Manager-1-4-0&p=16563263&viewfull=1#post16563263>). But in summary, the HoN mod manager is a tool to make applying mods easier. It takes files in the [.honmod](#.honmod-file-format) format, which describe how a mod should be applied and which files should be modified, and applies them automatically for you.

This is currently the primary way to create, share, and apply mods. Modern mods should be created using the format described below.

## .honmod file format

Just like an `.s2z` a `.honmod` is a renamed (uncompressed) `.zip`. It contains the following files:

- `mod.xml`: A valid XML file with describing "how the mod is applied", that is where to add/edit/delete code from the original files. There is a very detailed documentation given below, but you might as well just try looking at other mods to understand how this file works.
- `icon.png`: A 48x48 icon to be displayed next to the mod's name in the mod manager. Note that partial transparency may not work or look really bad. This file is optional.
- Any supportive files, e.g. new files your mod adds. You need to reference these in `mod.xml` or they will be ignored.

### File structure

```xml
<?xml version="1.0" encoding="UTF-8"?>
<modification
    application="Heroes of Newerth"        fixed
    appversion="0.3"                       game version requirement (shown is "anything starting with 0.3")
    mmversion="1.3"                        fixed, the version of the file format
    name="The Mod's Name"                  It is strongly recommended to keep this name consistent as it will identify the mod.
    version="1.0"                          The current version of the mod. Should grow with each new release.
    description="blahblahblah"             Explanatory text about the mod to be shown when selected in the Mod Manager (optional)
    author="Your Nickname"                 Will be shown below the mod's name. (optional)
    weblink="http://www.com/"              A clickable link to be shown below the description text. (optional)
    updatecheckurl="http://.../version.txt"A URL to a text file containing the newest version number. (optional)
    updatedownloadurl="http://.../m.honmod"A URL to a .honmod file that will be downloaded and replace this mod file when the text file specified above contains a higher version number than this mod currently has. (optional)
>
    <!-- Of the elements being described below each kind may appear any number of times and in any order -->

    <incompatibility name="Other mod" version="1.0-1.4" />
    <!-- States an incompatibility with certain versions of another mod to be abided by the Mod Manager; this mod cannot be enabled when the other mod is enabled. -->

    <requirement name="Other mod" version="2.5.1-*" />
    <!-- States a dependence on another mod to be abided by the Mod Manager; this mod cannot be enabled when the other mod is not present and enabled. -->

    <applyafter name="Other mod" version="2.5.1-*" />
    <applybefore name="Other mod" version="2.5.1-*" />
    <!-- If the specified other mod is enabled, this mod will be applied after/before it. -->

    <copyfile name="path1" source="path2" overwrite="newer" version="1.0" condition="..." />
    <!-- Copies a supportive file from the mod archive. If "path2" is not specified the file "path1" is copied, if it is "path2" is copied and renamed to "path1".
         overwrite specifies a controlled behaviour in case the target file already exists:
         "yes"   -> target file is overwritten
         "no"    -> target file is left as is
         "newer" -> target file is overwritten if its version is lower than the one specified by the version attribute
        
        If the condition attribute is specified the copying is only performed if the given condition is true. A condition can consist of another mod being enabled or disabled or a boolean expression combining multiple such conditions. Examples of valid condition strings:
        'Tiny UI'
        not 'Tiny UI'
        'Tiny UI[v3.0]' and 'Automatic Ability Learner[v1.1-1.5]'
        ('BardUI' or ('Improved UI by Barter[v1.08]' and 'Improved UI Addon - Juking Map')) and not 'Tiny UI' -->

    <editfile name="path" condition="...">
        <!-- Edits a file from resources0.s2z or one that has already been copied
            If condition is specified this editfile tag is only executed if the given condition is true; uses the same syntax as for copyfile. -->

        <!-- Files are edited by executing a sequence of steps, each being represented by one of the four elements below.
             All elements need a string as input, which can either be delivered as inner text node (between the <operation></operation> tags) or read from a file in the mod archive specified by a source attribute.
             Every operation interacts with a "cursor" variable which points to a area in the file and starts out at the beginning of the file. -->
        
        <find position="end" /> <!-- synonyms for "find" are "seek" and "search" -->
        <!-- Moves the "cursor" to the next occurrence of the source string
             OR as specified by the position attribute, possible values being:
             "start"     -> Beginning of the file (synonyms: "begin", "head", "before")
             "end"       -> End of the file (synonyms: "tail", "after", "eof")
             any integer -> Move forward the specified number of characters (negative values allowed) -->
        <findup /> <!-- synonyms for "findup" are "seekup" and "searchup" -->
        <!-- Moves the "cursor" to the next occurrence of the source string, but searching backwards. -->
        
        <insert position="after" /> <!-- synonym for "insert" is "add" -->
        <!-- Inserts the source string at the "cursor", either before or after as the position attribute specifies. -->
        
        <replace />
        <!-- Replaces the string pointed to by the "cursor" with the source string. -->

        <delete />
        <!-- Deletes the string pointed to by the "cursor". Does not require a source string. -->
    </editfile>
</modification>
```

### Notes

- `version` values may only contain digits and periods. Any letters will be ignored!
- No two mods with the same name can be loaded at once.
- `requirement` tags allow mods of mods; such mods will always be applied *after* the mods they marked as required so that they may edit their code; note that `<requirement />` automatically implies `<applyafter />`.