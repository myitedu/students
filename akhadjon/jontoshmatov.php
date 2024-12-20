<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARIA Button Example</title>
</head>
<body>
<button
    id="expandBtn"
    aria-expanded="false"
    aria-controls="content">
    Show Content
</button>

<div id="content" hidden>
    <p>This is ARIA-controlled content!</p>
</div>

<script>
    const btn = document.getElementById('expandBtn');
    const content = document.getElementById('content');

    btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', !expanded);
        content.hidden = expanded; // Toggle visibility
    });
</script>
</body>
</html>
