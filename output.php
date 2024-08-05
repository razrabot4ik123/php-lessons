<?php 

function tagAndTagContent($tagHtml, $tagContent) {
  echo "<$tagHtml>$tagContent</$tagHtml>";
};

tagAndTagContent('span', 'asdasasdd');