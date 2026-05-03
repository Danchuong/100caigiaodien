# Jant — Refero Style

- Refero URL: https://styles.refero.design/style/4182357d-b0e6-46b2-a462-3e630e831085
- Site URL: https://jant.fr
- ID: 4182357d-b0e6-46b2-a462-3e630e831085
- Theme: dark
- Industry: other
- Created: 2026-04-30T02:03:19.786Z
- Ranks: newest: 456, popular: 1274, trending: 1265

> Midnight console, vivid blue accents.

## Description

Jant employs a dark, highly contrasted visual system reminiscent of a digital console. Deep, saturated violets form the primary backgrounds, creating an immersive, almost holographic feel. Type is direct and functional, predominantly white or light gray against the dark canvas, with vivid blue used carefully for interactive elements. Components are lightweight and largely borderless, emphasizing content over Chrome, contributing to a dense, information-rich display.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Violet | #01074b | brand | Page background, primary surface color for tables and footers. Its deep, vivid character sets the somber, digital tone |
| Twilight Indigo | #010535 | brand | Background for elevated elements like modals and overlays, and some subtle box shadows. Slightly less saturated than Midnight Violet |
| Action Blue | #1967d2 | brand | Primary action background for buttons and active states, highlight color for links. Its vivid saturation provides a clear focal point against the dark neutrals |
| Aqua Glow | #00a0bd | accent | Decorative border for footer, providing a subtle cool accent |
| Paper White | #ffffff | neutral | Primary text color for headlines and body copy, button text, and some borders. Offers stark contrast against dark backgrounds |
| Dark Ink | #202124 | neutral | Secondary text color, muted borders. Used for informational text on lighter surfaces, and borders in more complex structures |
| Medium Gray | #808080 | neutral | Tertiary text or icon color, table borders. Provides less emphasis than Paper White or Dark Ink |
| Soft Black | #000322 | neutral | Muted text color, subtle link borders. Creates a soft contrast on white backgrounds, or a subtle element on dark surfaces |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| arial | Arial | 300, 400, 700 | 15px, 16px, 18px, 20px | 0.83, 0.94, 1.00, 1.33, 1.50 | Primary font for headlines, table content, and general body text. Its broad weight range supports clear hierarchy without needing multiple typefaces. |
| Source Sans Pro | sans-serif | 300, 400, 700 | 10px, 13px, 15px | 1.00, 1.15, 1.40, 1.60, 1.85, 2.40 | Used for smaller text, such as list items, icon labels, footer text, and auxiliary body text. Supports dense information presentation at smaller sizes. |
| system-ui | sans-serif | 300, 400 | 9px, 15px | 1.00, 1.40, 1.86 | Functional text for links and buttons, often at smaller sizes. The system default provides quick rendering for interactive elements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 15 | 1 |  |
| body-sm | 16 | 1 |  |
| body | 18 | 1 |  |
| body-lg | 20 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "8px",
    "elements": "4px"
  },
  "elementGap": "15px",
  "sectionGap": "70px",
  "cardPadding": "20px",
  "pageMaxWidth": "660px"
}
```

## Components

### Primary Action Button

**Role:** Filled button indicating the primary action.

Background: Action Blue (#1967d2), Text: Paper White (#ffffff). Radius: 8px. Padding: 0px vertical, 20px horizontal. Uses 'system-ui' font.

### Ghost Action Button

**Role:** Outlined button for secondary actions, provides visual hierarchy.

Background: Paper White (#ffffff), Text: Action Blue (#1967d2). Border: 1px solid Action Blue (#1967d2). Radius: 8px. Padding: 0px vertical, 20px horizontal. Uses 'system-ui' font.

### Information Card (Transparent)

**Role:** A decorative, invisible card for content grouping.

Background: rgba(0, 0, 0, 0) (transparent). No border, no shadow. Radius: 0px. Padding: 0px.

### Cookie Consent Modal

**Role:** Modal for cookie consent, often at page load.

Background: Paper White (#ffffff), Box shadow: rgba(0, 0, 0, 0.2) 0px 4px 8px. Radius: 8px. Contains a title (`arial` 20px bold), body text (`arial` 16px normal), and two action buttons (Primary Action, Ghost Action).

## Do's

- Prioritize Midnight Violet (#01074b) and Twilight Indigo (#010535) as background and primary surface colors, establishing the dark theme.
- Use Paper White (#ffffff) for all primary text against dark backgrounds to ensure maximum contrast and readability.
- Apply Action Blue (#1967d2) strictly for primary interactive elements and critical links; avoid decorative use.
- Ensure all buttons use an 8px border-radius, while other small interactive elements use 4px for a unified UI language.
- Maintain a compact information density using the 15px elementGap and 20px cardPadding, while structuring sections with 70px vertical spacing.
- Utilize 'arial' for headlines and main content, and 'Source Sans Pro' or 'system-ui' for smaller, functional text.
- Emphasize content over component chrome where possible, using minimal borders and transparent backgrounds for cards.

## Don'ts

- Avoid using light backgrounds for entire pages; the system is designed around a dominant dark mode.
- Do not introduce new vibrant colors outside of the defined accent palette; rely on Action Blue for highlights.
- Refrain from using heavy shadows or decorative gradients on surfaces; aim for a flat, digital aesthetic.
- Do not deviate from the specified typography for titles and body text; maintain the Arial, Source Sans Pro, and system-ui hierarchy.
- Avoid large empty spaces; leverage the compact density by carefully placing content and maintaining appropriate element gaps.
- Do not use generic system link styles (like #0000ee); apply Soft Black (#000322) or Action Blue (#1967d2) as defined.

## Layout

The page maintains a maximum width of 660px, creating a focused, single-column content flow, centered on the dark background. The hero section is characterized by a prominent headline and body text, with a 70px section gap before the next content block. Content is presented in vertical stacks, with elements like tables and lists filling the constrained width. Navigation appears minimal, likely a discreet sticky header or footer, reflecting the content-first approach.

## Imagery

The site uses minimal imagery, primarily focusing on text and UI elements. When present, images are tightly integrated into the content, rather than serving as large decorative backdrops. Visuals are functional rather than atmospheric. Icons would likely be solid or filled, appearing crisp against the dark backgrounds, potentially in Paper White or Action Blue to align with the high-contrast UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Replit | Similar dark-mode UI with a focus on code-like typography and functional, compact information density. |
| Vercel | Employs a stark dark theme with subtle violet and blue accents, prioritizing clear, concise text display over heavy graphical elements. |
| Linear | Relies on deep, dark backgrounds and sharp white text with carefully introduced accent colors for interactive elements, maintaining a functional, high-contrast aesthetic. |
| Plural | Shares a preference for dark, rich backgrounds and a minimalist approach to components, emphasizing content clarity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #01074b
border: #808080
accent: #00a0bd
primary action: #1967d2 (filled action)

Example Component Prompts:
1. Create a primary call-to-action button: background Action Blue (#1967d2), text Paper White (#ffffff), 8px radius, 0px vertical padding, 20px horizontal padding, 'system-ui' font at 15px weight 400.
2. Design a section header: text Paper White (#ffffff), 'arial' font at 20px weight 400, line-height 0.83, spaced 70px below the previous section.
3. Build a link within body text: text Action Blue (#1967d2), 'Source Sans Pro' font at 13px weight 400, letter-spacing normal, no underline.
4. Create a ghost button: background Paper White (#ffffff), text Action Blue (#1967d2), 1px solid Action Blue (#1967d2) border, 8px radius, 0px vertical padding, 20px horizontal padding, 'system-ui' font at 15px weight 400.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514580412-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514580412-thumb.jpg |
