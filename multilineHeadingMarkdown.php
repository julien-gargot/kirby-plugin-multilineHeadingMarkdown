<?php
/**
 * Multiline Heading in Markdown.
 *
 * @author Julien Gargot <julien@g-u-i.net>
 * @version 1.0.1
 */
kirbytext::$pre[] = function($kirbytext, $text) {

  // Add a space after each heading.
  $pattern = '/^(#+)\s*/';
  $replacement = '${1} ';
  $text = preg_replace($pattern, $replacement, $text);

  // The regular expression match the successive lines that begin with the same
  // heading.The space previously added allows to count, more simply, the number
  // of # that are present in the heading.
  $pattern = '/(^#+\s)(.*\n(\1))+.*/im';
  $text = preg_replace_callback($pattern, function($matches){

    // Replacing multiple line by a breaking line.
    $pattern = '/\n+'.$matches[1].'/';
    return preg_replace($pattern, '<br>', $matches[0]);

  }, $text);

  return $text;

};
