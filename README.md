# Partner Advisory Council Lightning Talk Landing Page

This repository contains a lightweight WordPress theme that acts as a starting point for the PAC Lightning Talk landing page.  
It has been simplified so that the page content can be fully managed with the [Divi Builder](https://www.elegantthemes.com/divi/) plugin.

## Usage

1. Upload the theme directory to your WordPress `wp-content/themes` folder and activate it.
2. Install and activate the Divi Builder plugin.
3. When the theme is activated a page titled **Lightning Talk Landing** is automatically created using `landing-page-template.html`. Open this page in Divi and convert it to a Divi layout.
4. You can now edit that page (or any other) entirely with the Divi Builder. The theme's templates simply render `the_content()` so all layout is controlled by Divi.

## Testing

The project uses Node's built-in test runner. To execute the tests run:

```bash
npm test
```

This runs `node --test` and validates a few theme files.
