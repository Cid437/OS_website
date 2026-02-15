# SimpleSite

This is a minimal static site scaffold intended for GitHub Pages.

To preview locally (from the `c:/xampp/htdocs/OS_website` folder):

```bash
# If you have Python 3 installed
python -m http.server 8000
# then open http://localhost:8000
```

Publishing to GitHub Pages:
- Create a new repository and push these files.
- In repository Settings > Pages, choose branch `main` (or `gh-pages`) and root `/` (or `docs/` if you place files there).
- Wait a minute and your site will be live at `https://<your-username>.github.io/<repo>`.
