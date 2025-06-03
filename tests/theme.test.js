import fs from 'node:fs';
import path from 'node:path';
import assert from 'node:assert/strict';
import { test } from 'node:test';

test('index.php includes get_header()', () => {
  const content = fs.readFileSync(path.join(process.cwd(), 'index.php'), 'utf8');
  assert.match(content, /get_header\s*\(/);
});

test('index.php includes get_footer()', () => {
  const content = fs.readFileSync(path.join(process.cwd(), 'index.php'), 'utf8');
  assert.match(content, /get_footer\s*\(/);
});

test('functions.php enqueues pac-tailwind script', () => {
  const content = fs.readFileSync(path.join(process.cwd(), 'functions.php'), 'utf8');
  assert.match(content, /wp_enqueue_script\([^)]*'pac-tailwind'/);
});
