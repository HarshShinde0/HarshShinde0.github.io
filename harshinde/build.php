#!/usr/bin/env php
<?php
/**
 * build.php — Renders the PHP site into static HTML files for GitHub Pages.
 * Run from the harshinde/ directory.
 * Outputs files into the _site/ directory at the repo root.
 */

$outDir = __DIR__ . '/../_site';
if (!is_dir($outDir)) mkdir($outDir, 0755, true);

$pages = ['about', 'research', 'service', 'blog'];

foreach ($pages as $page) {
    // Simulate the PHP router: set $_GET['page'] and capture output
    $_GET['page'] = $page;

    // Capture the full page output
    ob_start();
    include __DIR__ . '/index.php';
    $html = ob_get_clean();

    // Fix internal links: ?page=X  →  X.html (about stays index.html)
    $html = preg_replace('/href=[\'"]?\?page=about[\'"]?/', 'href="index.html"', $html);
    $html = preg_replace('/href=[\'"]?\?page=(\w+)[\'"]?/', 'href="$1.html"', $html);

    $filename = ($page === 'about') ? 'index.html' : $page . '.html';
    file_put_contents($outDir . '/' . $filename, $html);
    echo "Built: $filename\n";
}

echo "Done.\n";
