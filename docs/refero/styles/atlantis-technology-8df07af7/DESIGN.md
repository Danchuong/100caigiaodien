# Atlantis Technology — Refero Style

- Refero URL: https://styles.refero.design/style/8df07af7-5935-405f-a2df-65fbf9ca3db9
- Site URL: https://www.atlantistech.com
- ID: 8df07af7-5935-405f-a2df-65fbf9ca3db9
- Theme: dark
- Industry: saas
- Created: 2026-04-30T03:23:12.951Z
- Ranks: newest: 168, popular: 1047, trending: 941

> Midnight Command Center

## Description

Atlantis uses a high-contrast dark theme, creating a serious and impactful atmosphere. The design is dominated by deep space blacks and stark whites, with a single luminous orange accent for calls to action and critical highlights, balanced by a subtle, resonant purple for supporting elements. Typography is bold and concise, emphasizing clear messaging over visual noise. Surfaces are mostly flat, with minimal elevation implied through light borders rather than heavy shadows, and cards often feature asymmetric corner radii.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Midnight | #0a0c10 | neutral | Primary page background, base surface |
| Slate Card | #12151c | neutral | Card backgrounds, elevated section backgrounds |
| Ghostly Gray | #b5b6b7 | neutral | Muted text, hairline borders, placeholder text for dark surfaces |
| Fog Whisper | #858688 | neutral | Secondary body text, supporting details |
| Shadow Touch | #545558 | neutral | Tertiary text, subtle dividers, inactive states |
| Pure White | #ffffff | neutral | Primary headings, prominent body text, main navigational elements |
| Black Ink | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Flare Orange | #f7931a | brand | Primary action buttons, accented text within headlines to denote emphasis, interactive elements |
| Amber Glow | #ffad42 | brand | Orange outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Orbital Violet | #8b5fc8 | accent | Decorative icons, badge text and borders, sub-navigation highlights |
| Deep Current Violet | #6b3fa0 | accent | Subtler violet accents, outlines for supporting elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 12px, 13px, 14px, 15px, 16px, 17px, 18px, 19px, 20px, 26px, 29px | 1.50, 1.60, 1.70, 1.75, 1.80, 1.85 | Standard body text, descriptive labels, secondary navigation, and general UI elements. Its slightly wider tracking ensures legibility at smaller sizes on dark backgrounds. |
| Space Grotesk | Space Mono, monospace | 500, 600, 700, 800 | 12px, 13px, 14px, 16px, 17px, 20px, 22px, 44px, 48px, 60px, 64px, 80px | 1.00, 1.06, 1.10, 1.25, 1.30, 1.60 | Primary headlines, emphatic call-outs, and impactful statements. Its geometric structure and tight tracking (especially at large sizes) give it a modern, almost technical edge, creating a sense of authority and precision. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.36 |
| body-sm | 14 | 1.7 | 0.42 |
| body | 16 | 1.8 | 0.48 |
| subheading | 20 | 1.6 | -0.4 |
| heading-sm | 26 | 1.3 | -0.52 |
| heading | 44 | 1.1 | -0.88 |
| heading-lg | 60 | 1.06 | -1.8 |
| display | 80 | 1 | -3.2 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "badges": "100px",
    "buttons": "10px",
    "navigation": "12px"
  },
  "elementGap": "24px",
  "sectionGap": "48px",
  "cardPadding": "48px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call-to-action button for initiating key user actions.

Filled with Flare Orange (#f7931a) background and Black Ink (#000000) text. Padding is 16px vertical, 36px horizontal. Border radius is 10px. Uses Space Grotesk 16px, weight 500.

### Navigation Link Button

**Role:** Primary navigation element in the header.

Ghost button with an Orbital Violet (#8b5fc8) text color. Padding is 10px vertical, 16px horizontal. Border radius is 12px. Uses Inter 16px, weight 500.

### Feature Card (Asymmetric)

**Role:** Container for showcasing key features or content blocks.

Background is Slate Card (#12151c). Padding is 48px vertical, 36px horizontal. Border radius is 16px on the top-left, with other corners sharp (or right corners sharp on some variants). No box shadow.

### Content Card (Standard)

**Role:** Generic card for content sections, no distinct corner treatment.

Background is Slate Card (#12151c). Padding is 48px vertical, 36px horizontal. All corners are sharp (0px radius). No box shadow.

### Accent Badge

**Role:** Small informational tag or category label.

Background is rgba(107, 63, 160, 0.15), text color is Orbital Violet (#8b5fc8). Padding is 8px vertical, 12px left, 16px right. Border radius is 100px (pill shape).

### Ghost Link Button

**Role:** Secondary action or informational link, often accompanying a primary button.

Transparent background, text color is Pure White (#ffffff). Padding is 16px vertical, 36px horizontal. Border radius is 12px. Uses Space Grotesk 16px, weight 500.

## Do's

- Always use Deep Midnight (#0a0c10) as the base page background for consistency in dark mode.
- Emphasize key words in headlines with Flare Orange (#f7931a) to draw immediate attention and convey importance.
- Apply the 100px radius for all badges to create clear, pill-shaped elements.
- Use Space Grotesk for all headlines and subheadings to maintain a sharp, impactful typographic tone, leveraging its tight letter spacing at larger sizes.
- Ensure generous vertical spacing between sections, using the sectionGap of '48px' to create breathing room.
- Implement asymmetric radii of 16px (e.g., 16px 0 0 16px or 0 16px 16px 0) on cards to add a distinctive, modern edge.
- Use Orbital Violet (#8b5fc8) sparingly for decorative UI elements, icons, and subtle textual accents, ensuring it supports and doesn't compete with Flare Orange.

## Don'ts

- Never introduce additional primary accent colors; Flare Orange (#f7931a) and Orbital Violet (#8b5fc8) are the only brand accents permitted.
- Avoid heavy box shadows; elevation should be primarily communicated through subtle borders and background variations like Slate Card (#12151c).
- Do not use generic system fonts; always prioritize Inter and Space Grotesk to maintain brand identity.
- Do not excessively bold body text; use Inter at weights 400 or 500, reserving heavier weights of Space Grotesk for headlines only.
- Avoid tight element spacing; maintain an adequate elementGap of '24px' to prevent visual clutter.
- Do not place text directly on complex photographic backgrounds; use either solid color overlays or clearly defined text blocks to ensure legibility.
- Do not use bright or light backgrounds for main content sections; strictly adhere to the established dark theme.

## Layout

The page primarily follows a max-width contained model, typically centered. The hero section is full-bleed with Deep Midnight background, featuring a centered headline with accented text and calls to action. Subsequent sections alternate between full-width black bands and contained content blocks, creating a consistent vertical rhythm. Content often arranges as stacked centered elements or two-column layouts, with text-heavy blocks on the left and supporting visuals (or sometimes text) on the right. There's a notable absence of dense card grids, favoring individual, impactful content blocks. The site navigation is a sticky top bar, minimally styled, offering key links and a prominent primary action button.

## Imagery

The site uses a combination of abstract, wireframe-like geometric graphics and occasional illustrative elements to convey complex concepts. Photography is largely absent from UI, replaced by visual metaphors of progression and structure. Icons are simple, outlined, and monochromatic, with a very light stroke weight, primarily using Pure White or Ghostly Gray, occasionally accented with Orbital Violet. The overall density of imagery is low, allowing text and typography to dominate, supporting the precise, authoritative tone.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark-mode UI with sharp typography, minimal use of color, and a functional yet sophisticated aesthetic focusing on productivity tools. |
| Vercel | Premium dark-themed interface, heavy use of bold sans-serifs, and subtle glowing accents for key interactive elements. |
| PluralSight (dark mode) | Use of vivid complementary color accents (orange/purple) against a dark, low-contrast background for educational and professional content. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #0a0c10
border: #b5b6b7
accent: #8b5fc8
primary action: #f7931a (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #f7931a background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Feature Card: Slate Card (#12151c) background, 48px vertical and 36px horizontal padding. Set border-radius to 16px 0 0 16px. Inside, a heading 'You're building something that matters.' in Pure White (#ffffff), Space Grotesk 44px weight 700. Include a small Accent Badge 'Dedicated to Projects of Consequence'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519373430-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519373430-thumb.jpg |
