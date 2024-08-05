<?php 

function tagHtmlAndTagContentAndTagItaration($tagHtml, $tagContent, $tagItaration) {
  for ($l = 0; $l < $tagItaration; $l++) { 
    echo "<$tagHtml>$tagContent</$tagHtml>";
  };
};

tagHtmlAndTagContentAndTagItaration('span', 'asdasasdd', 10);