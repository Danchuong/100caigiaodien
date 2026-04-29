# Project Rules

## Browser Verification

- Do not use Playwright or MCP Playwright in this project.
- For local checks, use terminal commands, Docker/WP-CLI, PHP syntax checks, `curl`, and real browser windows opened for the user.
- When visual review is needed, open the local URL for the user to inspect manually instead of taking Playwright screenshots.

## Current Theme Workflow

- Each design style maps directly to one theme folder: `Style 1 = des-1`, `Style 2 = des-2`, and so on.
- For each style, keep delivery files simple and include only the files the customer needs.
- Customer-facing scope is now home, header, and footer.
