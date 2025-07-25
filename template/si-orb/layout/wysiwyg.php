<?php
$editorContent = $editorContent ?? '';
$editorId = $editorId ?? 'editor8';
$toolbarId = $toolbarId ?? 'toolbar8';
?>

<div class="toolbar-box">
    <div id="<?= htmlspecialchars($toolbarId) ?>">
        <span class="ql-formats">
            <select class="ql-size">
                <option value="small">Small</option>
                <option selected="">Normal</option>
                <option value="large">Large</option>
                <option value="huge">Huge</option>
            </select>
        </span>
        <span class="ql-formats">
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-underline"></button>
            <button class="ql-strike"></button>
            <button class="ql-script" value="sub"></button>
            <button class="ql-script" value="super"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-header" value="1"></button>
            <button class="ql-header" value="2"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-list" value="ordered"></button>
            <button class="ql-list" value="bullet"></button>
            <button class="ql-indent" value="-1"></button>
            <button class="ql-indent" value="+1"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-link"></button>
            <button class="ql-image"></button>
            <button class="ql-video"></button>
            <select class="ql-color"></select>
            <select class="ql-background"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-blockquote"></button>
            <button class="ql-code-block"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-align" value=""></button>
            <button class="ql-align" value="center"></button>
            <button class="ql-align" value="right"></button>
            <button class="ql-align" value="justify"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-clean"></button>
        </span>
    </div>
    <div id="<?= htmlspecialchars($editorId) ?>" class="editor-quill"><?= $editorContent ?></div>
</div>