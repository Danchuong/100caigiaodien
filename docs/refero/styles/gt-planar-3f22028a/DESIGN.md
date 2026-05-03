# Gt-planar — Refero Style

- Refero URL: https://styles.refero.design/style/3f22028a-05d4-4648-a6d1-591134af06a4
- Site URL: https://gt-planar.com
- ID: 3f22028a-05d4-4648-a6d1-591134af06a4
- Theme: dark
- Industry: design
- Created: 2026-04-30T01:51:12.303Z
- Ranks: newest: 506, popular: 561, trending: 341

> Midnight mainframe with glowing terminals.

## Description

GT Planar channels 'cyberpunk utility': a deep dark canvas with vibrant, almost neon, monochromatic accents of electric violet and glowing green. Typography is hyper-controlled and precise, often uppercase, with distinct pixel-perfect white borders defining interactive elements. This creates a high-fidelity, command-line interface aesthetic where every visual element serves a clear, functional purpose in a deeply contrasted, high-tech environment.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Void Black | #000000 | neutral | Page background, primary text on bright surfaces, button text on electric purple fills, hairline borders |
| Screen White | #ffffff | neutral | Interface text, icon strokes, active state borders, text on dark surfaces, accent shadows |
| Input Dark | #1a0014 | neutral | Input field backgrounds, subtle elevated surface |
| Subtle Gray | #949494 | neutral | Muted text, inactive element borders, secondary information |
| Border Gray | #606060 | neutral | Fine, utilitarian borders on neutral elements |
| Electric Violet | #6100ff | brand | Primary action button backgrounds, interactive text, button borders, active accents |
| Fluorescent Green | #00ff85 | brand | Primary Call to Action button background, active state borders, and high-emphasis information. This provides a stark contrast to the violet |
| Deep Space Violet | #29006c | accent | Secondary action button backgrounds, elevated card surfaces with a subtle tint |
| Safety Yellow | #fcff76 | accent | Green outline accent for tags, dividers, and focused UI edges |
| Alert Red | #ff003d | accent | Red outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Indicator Orange | #ff8a00 | accent | Orange outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT Planar | Space Mono, IBM Plex Mono | 300, 400, 700 | 11px, 14px, 16px, 17px, 20px, 24px, 25px, 32px, 37px, 58px, 86px, 115px, 146px, 187px, 230px, 274px | 0.80, 0.90, 0.95, 1.00, 1.09, 1.10, 1.14, 1.15, 1.17, 1.19, 1.20, 1.24, 1.43, 1.50, 1.63 | The sole typeface, GT Planar, defines the entire text hierarchy from micro-interactions to monumental headlines. Its variable weights emphasize precision and stark contrast, making it crucial for the 'cyberpunk utility' aesthetic. The wide range of sizes and letter-spacing values allows for hyper-controlled text density. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.43 | 0.05 |
| body-sm | 14 | 1.17 | 0.015 |
| body | 16 | 1.15 | 0.011 |
| subheading | 24 | 1.1 | 0.008 |
| heading | 58 | 0.95 | -0.005 |
| heading-lg | 86 | 0.9 | -0.01 |
| display-sm | 146 | 0.8 | -0.05 |
| display | 274 | 0.8 | -0.2 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "9999px",
    "buttons": "9999px",
    "default": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "25px",
  "cardPadding": "25px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button (Violet Fill)

**Role:** Main interactive element for actions.

Filled with Electric Violet (#6100ff), black text, no border radius, 0px padding. Focus on background color for interaction.

### Outlined Button (Violet Border)

**Role:** Secondary action or ghost button.

Transparent background, Electric Violet (#6100ff) text, Electric Violet (#6100ff) 1px border. 5px padding, 0px border-radius.

### Dark Elevated Button (Violet Border)

**Role:** Tertiary action or grouped controls.

Deep Space Violet (#29006c) background, Electric Violet (#6100ff) accent text, Electric Violet (#6100ff) 1px border. No border radius, 0px padding.

### Fluorescent Action Button

**Role:** Prominent, high-contrast call to action.

Fluorescent Green (#00ff85) background, Void Black (#000000) text, Fluorescent Green (#00ff85) 1px border. 25px top/bottom padding, 50px left/right padding, 0px border-radius.

### Text Input

**Role:** Data entry fields.

Input Dark (#1a0014) background, Screen White (#ffffff) text, Screen White (#ffffff) 1px border. No border radius, 0px padding.

### Navigation Link Outlined (Red)

**Role:** Accentuated navigation item for warnings/promotions.

Transparent background, Alert Red (#ff003d) text. Defined by a 1px Alert Red (#ff003d) border instead of a fill, 10px padding, 0px border-radius.

### Navigation Link Outlined (Yellow)

**Role:** Accentuated navigation item for warnings/promotions.

Transparent background, Safety Yellow (#fcff76) text. Defined by a 1px Safety Yellow (#fcff76) border instead of a fill, 10px padding, 0px border-radius.

## Do's

- Prioritize Void Black (#000000) as the dominant background color for most sections to maintain a dark, immersive theme.
- Use Electric Violet (#6100ff) only for primary interactive elements, active states, and critical information to maximize its impact.
- Employ the GT Planar typeface exclusively, varying weight and size meticulously to establish hierarchy rather than mixing font families.
- Define interactive elements with stark 1px Screen White (#ffffff) or accent-colored borders (Electric Violet #6100ff, Alert Red #ff003d, Safety Yellow #fcff76) and 0px border-radius for a precise, angular look.
- Apply negative letter-spacing for large display text and positive letter-spacing for smaller, utilitarian text to enhance the precise, engineered feel.
- Use 0px border-radius for most UI elements like buttons, inputs, and cards, reserving 9999px for small, tag-like elements.
- Construct layouts with clear, often horizontal, divisions and compact spacing to pack information densely without feeling cluttered.

## Don'ts

- Avoid using soft shadows or gradients that suggest depth or realism, as the system relies on stark contrasts and flat surfaces.
- Do not introduce additional font families; GT Planar is the sole typographic voice.
- Refrain from using pastel or desaturated colors; all accent colors must be vivid and highly saturated.
- Never add rounded corners to primary buttons, inputs, or cards; maintain the hard-edged aesthetic except for very specific tag-like elements.
- Do not use more than two accent colors prominently in a single view to maintain focus and prevent visual noise.
- Avoid large, unbordered blocks of color unless they serve as a full-bleed hero, instead opting for precise borders around elements.
- Do not use generic spacing values; adhere to the 4px base unit and derived tokens for compact, consistent rhythm.

## Layout

The page model is full-bleed but features tightly controlled maximum width content areas. The hero section often utilizes a full-viewport, dynamically generated visual background with centered, stark headlines. Section rhythm is primarily seamless, with content blocks often flowing directly into one another or defined by subtle internal dividers rather than alternating background bands. Content arrangement varies from centered stacks of text to more complex, grid-based interactive elements where text and functional UI are integrated directly into the visual experience. The overall density is compact, even within the full-bleed canvas, ensuring information is readily accessible. Navigation is handled via a fixed top bar with minimal, bordered text links.

## Imagery

This design system uses no traditional imagery like photography or illustration. Instead, visual elements are generated dynamically, resembling wireframes or high-speed light trails, contributing to a sense of data visualization and kinetic energy. The focus is entirely on UI elements and stark typography. Icons, where present, are monochromatic outlines with sharp angles and thin strokes.

## Elevation

| Element | Style |
| --- | --- |
| Interactive Elements | rgb(255, 255, 255) 1px 0px 0px 0px, rgb(255, 255, 255) 0px 1px 0px 0px, rgb(255, 255, 255) 1px 1px 0px 0px, rgb(255, 255, 255) 1px 0px 0px 0px inset, rgb(255, 255, 255) 0px 1px 0px 0px inset |

## Similar Brands

| Business | Why |
| --- | --- |
| The Future is Type | Shares a strong emphasis on a single, technically precise monospace/geometric typeface, using it to build an entire visual identity. |
| Hyper Island | Employs high-contrast dark themes with vivid, sometimes neon, single-color accents for interactivity and focus. |
| Certain graphic design portfolios | Focuses heavily on typographic experimentation and visual starkness, treating text as the primary graphic element. |
| Gandi.net | Features a dark UI with bright, saturated key action colors and minimalist, functional design. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: #6100ff
primary action: #6100ff (filled action)

Example Component Prompts:
Create a primary action button: Fluorescent Action Button with text 'DOWNLOAD NOW'.
Create a navigation link: Outlined Button (Violet Border) with text 'TYPETESTER'.
Create a hero section: Void Black background. Main heading at 274px GT Planar weight 700, Screen White, letter-spacing -0.20em, with a sub-heading at 58px GT Planar weight 400, Screen White, letter-spacing -0.005em. Include a Fluorescent Action Button with text 'START YOUR JOURNEY'.
Create an input field: Text Input with placeholder text 'Enter email address' in Subtle Gray (#949494) and user input in Screen White (#ffffff).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513839786-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513839786-thumb.jpg |
