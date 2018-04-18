<?php

if (rex::isBackend() && !empty(rex::getUser())) {
    rex_view::addCssFile($this->getAssetsUrl('lib/codemirror/lib/codemirror.css'));
    rex_view::addCssFile($this->getAssetsUrl('lib/highlightjs/styles/github.css'));
    rex_view::addCssFile($this->getAssetsUrl('lib/tui-editor/dist/tui-editor.css'));
    rex_view::addCssFile($this->getAssetsUrl('lib/tui-editor/dist/tui-editor-contents.css'));

    rex_view::addJsFile($this->getAssetsUrl('lib/markdown-it/dist/markdown-it.js'));
    rex_view::addJsFile($this->getAssetsUrl('lib/to-mark/dist/to-mark.js'));
    rex_view::addJsFile($this->getAssetsUrl('lib/tui-code-snippet/dist/tui-code-snippet.js'));
    rex_view::addJsFile($this->getAssetsUrl('lib/codemirror/lib/codemirror.js'));
    rex_view::addJsFile($this->getAssetsUrl('lib/highlightjs/highlight.pack.js'));
    rex_view::addJsFile($this->getAssetsUrl('lib/squire-rte/build/squire-raw.js'));
    rex_view::addJsFile($this->getAssetsUrl('lib/tui-editor/dist/tui-editor-Editor.js'));
    rex_view::addJsFile($this->getAssetsUrl('tui.js'));
}
