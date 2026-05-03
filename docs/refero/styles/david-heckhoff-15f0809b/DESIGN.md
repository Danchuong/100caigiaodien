# David Heckhoff — Refero Style

- Refero URL: https://styles.refero.design/style/15f0809b-b7e0-4824-844f-286c39f4accf
- Site URL: https://david-hckh.com
- ID: 15f0809b-b7e0-4824-844f-286c39f4accf
- Theme: light
- Industry: design
- Created: 2026-04-30T01:49:12.490Z
- Ranks: newest: 512, popular: 153, trending: 99

> Warm canvas, playful 3D

## Description

This system expresses a playful, modern web developer's environment, characterized by soft, warm neutrals as a canvas for bold, single-hue accents. Typographical hierarchy is established through variable font weights and generous line heights, rather than drastic size shifts. Immersive 3D iconography sets a distinct tone, further solidified by a strong orange action color that adds an energetic, 'get-it-done' feel. Components prioritize rounded forms and minimal, subtle outlining, echoing the friendly nature of the primary visuals.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Beige | #f5efe6 | neutral | Page backgrounds, large structural elements, subtle background for ghost buttons, footer backgrounds — provides a warm, inviting base layer |
| Mid-Tone Beige | #e9ded0 | neutral | Card surfaces, subtle button borders, soft elevated elements — works as a secondary surface atop Canvas Beige, maintaining the overall warmth |
| Deep Mocha | #2d2a24 | neutral | Primary text, strong borders, prominent text on buttons, main text elements — provides high contrast against the light beige surfaces |
| Muted Stone | #5f5646 | neutral | Secondary text, descriptive labels, subtle card text — a softer text color for less prominent information, designed to recede slightly |
| Light Linen | #dfd2bf | neutral | Tertiary card backgrounds, light button fills where a very subtle distinction is needed |
| Polar Mist | #e1f5ff | neutral | Decorative icon accents, subtle highlight effects, supporting visual elements in the 3D illustrations — a near-gray with a cool blue tint |
| True White | #ffffff | neutral | Text on dark backgrounds, small icon details, very subtle button outlines — a clean, bright accent for maximum contrast |
| Vibrant Orange | #ff8400 | accent | Primary call-to-action button backgrounds — a bold, energetic accent that immediately draws attention and signifies interactivity |
| Electric Blue | #34bfff | accent | Blue outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Hologram Top | #003585 | accent | Top portion of holographic gradient effects, such as in 3D character bases |
| Hologram Bottom | #005291 | accent | Bottom portion of holographic gradient effects, seen in 3D scene elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Urbanist | Inter | 400, 500, 700, 800, 900 | 14px, 16px, 22px, 72px, 88px | 1.09, 1.11, 1.20, 1.36 | Primary typeface for all UI text, headings, body, and links. Its humanist sans-serif style contributes to the approachable and friendly tone. Letter spacing is subtly tightened for headlines for a more contained feel. |
| ProFontWindows | Roboto Mono | 400, 700 | 16px, 18px, 22px, 28px | 1.20 | Used for code snippets and specialized technical text, offering a distinctive mono-spaced character. Its inclusion highlights the developer focus of the brand. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.2 |  |
| body-lg | 16 | 1.2 | 0.24 |
| subheading | 22 | 1.2 | 0.32 |
| heading | 28 | 1.2 | 0.36 |
| display-sm | 72 | 1.11 | 0.32 |
| display | 88 | 1.09 | 0.37 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "links": "24px",
    "other": "12px",
    "buttons": "100px"
  },
  "elementGap": "18px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link (Ghost)

**Role:** Header and footer navigation items.

Transparent background with Deep Mocha text. `padding: 4px 0px`. No border, relying on text contrast for distinction. `border-radius: 100px` is present but visually unused due to transparent background.

### Primary Action Button

**Role:** Key calls to action.

Vibrant Orange background, True White text, `padding: 0px 26px`. Features a full `border-radius: 100px` creating a pill shape.

### Subtle Round Button

**Role:** Small, functional buttons like language selectors.

Light Linen background, Deep Mocha text, `padding: 10px`. Perfectly round with `border-radius: 50%`.

### Outlined Ghost Button

**Role:** Secondary action or navigational buttons.

Transparent background, Deep Mocha text, subtle Mid-Tone Beige border. `padding: 0px 16px`. Full `border-radius: 100px` for a pill shape.

### Feature Card

**Role:** Containers for project listings or information blocs.

Mid-Tone Beige background, `border-radius: 16px`, no visible shadow. Content is typically structured with an `elementGap` of 18px.

### Section Header

**Role:** Large, prominent titles for content sections.

Urbanist font, typically weight 800 or 900, Deep Mocha color. Sizes up to 88px, with `letterSpacing` around 0.37px.

### Accent Tag

**Role:** Small descriptive labels under headings.

Rectangle with Electric Blue border (3px solid), Deep Mocha text, `border-radius: 12px`. Used to categorize or highlight key information like 'WEB DEVELOPER'.

## Do's

- Prioritize Canvas Beige (#f5efe6) for page backgrounds to maintain the warm, inviting base.
- Use Vibrant Orange (#ff8400) exclusively for primary call-to-action button backgrounds to preserve its impact.
- Apply `border-radius: 100px` to all buttons for a consistent pill-shaped aesthetic.
- Employ the Urbanist font family for all primary UI text, adjusting weights to establish hierarchy rather than relying solely on size.
- Maintain an `elementGap` of 18px between elements within components for comfortable density.
- When introducing new 3D elements, integrate Electric Blue (#34bfff) or the Hologram Gradient to tie into the existing technical visual language.
- Ensure headings use a slightly condensed `letterSpacing` (e.g., 0.37px at 88px) to feel composed.

## Don'ts

- Avoid using saturated background colors other than Canvas Beige (#f5efe6), Mid-Tone Beige (#e9ded0), or Light Linen (#dfd2bf) for large surface areas.
- Do not introduce new border radii beyond 100px, 16px, 24px, or 12px to maintain geometric consistency.
- Refrain from using Vibrant Orange (#ff8400) for decorative purposes or secondary text; it must signal primary interaction.
- Do not use highly contrasting or dark backgrounds unless it's for a specific immersive 3D experience with its own contained color scheme.
- Avoid generic icon styles; instead, prefer the 3D illustrative style seen on the site to reinforce brand identity.
- Do not use generic system fonts; always utilize Urbanist or ProFontWindows to maintain typographical distinctiveness.
- Do not make buttons purely square or with sharp corners; always apply significant `border-radius`.

## Layout

The page primarily uses a contained layout with a maximum width, centered on a Canvas Beige background. The hero section is visually striking, often featuring a large, immersive 3D illustration dominating the upper fold, potentially with a full-bleed effect on transitions. Sections maintain a consistent vertical rhythm, with `sectionGap` of 48px, and often alternate content Left/Right with visuals. Content is frequently arranged in centered stacks for headings and short descriptions, transitioning to multi-column grids (like a 3-column card grid for projects) for feature presentation. The navigation is a classic top bar, often sticky or revealed on scroll, featuring ghost links and a prominent Primary Action Button. The overall density feels comfortable and spaced out, allowing the detailed 3D elements to breathe.

## Imagery

The site heavily features bespoke 3D illustrations, often appearing as hero elements or embedded within sections. These illustrations are volumetric, rendered with soft, diffused lighting and rounded, stylized forms, often depicting work-from-home setups or abstract representations of digital activity. Colors within the illustrations often align with the brand's accent colors (Electric Blue, Hologram gradients) and the warm neutral base. Photography is absent; the visual identity is driven purely by crafted 3D graphics. Icons are also stylized, generally outlined or subtly filled to match the illustrative aesthetic. Imagery is the primary content, often taking full width or large portions of the screen, serving a decorative and explanatory role to set a playful, high-tech atmosphere rather than product showcase.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Subtle use of color on a predominantly light/neutral canvas, with a single, highly saturated accent for key actions and illustrative elements. |
| Framer | Emphasis on 3D elements and immersive, playful graphics as a core part of the brand identity, integrated seamlessly into the UI. |
| Linear | Controlled use of typography with precise letter-spacing and thoughtful line heights for both readability and visual appeal, on a light neutral background. |
| Notion | A reliance on warm, inviting neutral color palettes for surfaces and backgrounds, creating a calm and focused environment. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #2d2a24
background: #f5efe6
border: #e9ded0
accent: #34bfff
primary action: #ff8400 (filled action)

Example Component Prompts:
Create a hero section headline: 'David Heckhoff' using Urbanist, weight 900, size 88px, Deep Mocha (#2d2a24), letter-spacing 0.37px, line height 1.09. Below it, an Accent Tag: 'WEB DEVELOPER', Deep Mocha text with a 3px solid Electric Blue (#34bfff) border, and 12px radius.

Create a Primary Action Button: #ff8400 background, #2d2a24 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

Design a Feature Card: Mid-Tone Beige (#e9ded0) background, 16px border-radius, with an internal element gap of 18px. Inside, place a title 'CubeWar' using Urbanist weight 700, size 22px, Deep Mocha (#2d2a24), and body text 'Multiplayer strategy game' using Urbanist weight 400, size 16px, Muted Stone (#5f5646).

Create a Navigation Link: 'Projects' with transparent background, Deep Mocha (#2d2a24) text, Urbanist weight 500, size 16px, padding 4px 0px. Ensure it has a 100px border-radius without a visible border to maintain the soft shape from interaction states.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513728228-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513728228-thumb.jpg |
