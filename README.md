# Multiline Heading in Markdown Plugin

This is a plugin for Kirby enables a simple syntax in Kirbytext to output markdown heading on multiple lines without writing a &lt;br&gt; in it.

## Installation

Download the kirby-plugin-multilineHeadingMarkdown repository and copy it to /site/plugins of your site.
Rename it “multilineHeadingMarkdown”.

Or just add it has a submodule `git submodule add https://github.com/julien-gargot/kirby-plugin-multilineHeadingMarkdown.git site/plugins/multilineHeadingMarkdown`

## Example usage in Kirbytext

```
  ## My heading
  ## is on two lines
  
  Because sometimes you want it.
  
```

will output…

```
  <h2>My heading <br>is on two lines</h2>
  
  <p>Because sometimes you want it.</p>
  
```

*NB. It works exactly like paragraphs, so if you add one or more blank lines between headings, the plugin does not will consider them.*
