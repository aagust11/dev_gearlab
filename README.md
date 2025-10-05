# GearLab

GearLab is an interactive sandbox for experimenting with gear trains and chain drives directly in the browser. The project now ships as a flat static site that can be served from the repository root without additional build steps.

## Project layout

```
index.html     # Application entry point
gearlab.js     # Bundled GearLab runtime (utility, model and UI logic)
hammer.min.js  # Third-party gesture handling library
img/           # UI assets used by the application
src/           # CoffeeScript sources for the GearLab runtime
upload_board.php
               # Minimal backend used to persist shared boards
```

The CoffeeScript source under `src/` matches the functionality of the bundled runtime. When updating the application logic, modify the CoffeeScript files and regenerate `gearlab.js` using the CoffeeScript compiler (e.g. `coffee -c -o . src/*.coffee`).

## Running locally

Serve the repository root with any static web server that is able to execute `upload_board.php` (optional, required only for saving and loading shared boards). For a pure client-side preview you can simply open `index.html` in a browser.

## License

GearLab is released under the MIT License. See `LICENSE` for details.
