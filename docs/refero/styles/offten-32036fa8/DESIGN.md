# Offten — Refero Style

- Refero URL: https://styles.refero.design/style/32036fa8-39f0-4ebb-b05e-f5b11038d87a
- Site URL: https://offten.xyz
- ID: 32036fa8-39f0-4ebb-b05e-f5b11038d87a
- Theme: light
- Industry: design
- Created: 2026-04-30T03:45:40.797Z
- Ranks: newest: 75, popular: 1082, trending: 1111

> Pixelated monochrome glitch

## Description

Offten's design system evokes a glitch-art, digital-native aesthetic, intentionally breaking common UI conventions. It features a stark monochromatic palette of black and white, punctuated by vivid green for interactive elements and deep orange for decorative accents. Typography is heavily tracked and often letter-spaced, creating a distinct, fragmented visual rhythm. Surfaces are minimal, relying on subtle backgrounds and borders rather than strong elevation to define elements. The overall feel is raw and experimental, prioritizing visual impact over traditional interface smoothness.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary text, card borders, navigation outlines, general UI borders — establishes high contrast against white backgrounds; Subtle card backgrounds, providing a light frosted effect without full opacity |
| Canvas White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Signal Green | #00db00 | accent | Interactive elements, outlined button borders, icon accents — provides a stark, vivid contrast for actions |
| Sunset Orange | #d53f09 | accent | Decorative text highlights, border accents, occasional heading color |
| Mango Pop | #f77647 | accent | Illustrative fills and strokes, decorative graphic elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| nh | monospace | 400, 700 | 14px, 15px, 16px, 19px, 26px, 39px | 1.15, 2.50 | Primary typeface for all text. Its unique square-like glyphs and heavy letter spacing, especially at larger sizes, create a distinctive, fragmented, almost pixelated appearance, reinforcing the digital art aesthetic. Weights 400 and 700 are used interchangeably for emphasis. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.15 | 0.36 |
| body | 16 | 1.15 | 0.4 |
| subheading | 19 | 1.15 | 0.49 |
| heading | 26 | 1.15 | 0.67 |
| display | 39 | 2.5 | 1.07 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "22.5px"
  },
  "elementGap": "6px",
  "sectionGap": "48-64px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Interactive element, navigation links

Transparent background, Midnight Ink text and border, 0px border-radius. Padding is minimal (0px).

### Outline Accent Button

**Role:** Primary interactive element, call to action

Transparent background, Signal Green text, 50% border-radius (pill-shaped), Signal Green 1px border. Padding is 1px 6px. Features a distinctive small size and vivid color for focus.

### Subtle Frosted Card

**Role:** Content container, information grouping

Background is Translucent Smoke (rgba(0,0,0,0.1)), with a 22.5px border-radius. Generous horizontal padding of 37.5px, but no vertical padding specified to create dense information blocks.

### Monochromatic Badge

**Role:** Descriptive tag, category label

Transparent background, Midnight Ink text, 0px border-radius. No specified padding, indicating a tight fit around text content.

## Do's

- Prioritize Midnight Ink for all primary text and UI outlines to maintain a stark monochromatic core.
- Use Signal Green exclusively for outlined interactive elements and critical icons to ensure visual emphasis.
- Apply nh font with its distinct letter-spacing for all text elements; ensure tracking is consistent across sizes.
- Implement the 22.5px border-radius consistently for card-like surfaces to create a uniform soft edge.
- Employ a base unit of 6px for all spacing decisions, especially for micro-padding and element gaps.
- Utilize Translucent Smoke (rgba(0,0,0,0.1)) subtly for card backgrounds, avoiding strong, opaque surface differences.
- Ensure headings use increased letter-spacing to enhance the signature 'fragmented' typographic style.

## Don'ts

- Avoid using drop shadows or heavy elevation; surfaces should remain flat or rely on subtle background tints.
- Do not introduce additional background or accent colors beyond Canvas White, Midnight Ink, Signal Green, and the orange tones.
- Do not use standard sans-serif fonts; the unique nh typeface is fundamental to the brand's identity.
- Do not deviate from the specified letter-spacing values, as they are integral to the typographic impression.
- Avoid using large, filled buttons; all primary actions should be represented by the outlined Signal Green variant.
- Do not round corners excessively on elements other than cards; buttons and badges should mostly be sharp or pill-shaped.
- Avoid generic imagery or illustrations; instead, favor abstract, glitch-like, or heavily processed visuals.

## Layout

The page structure often uses a full-bleed model, especially for hero sections, which can feature centered headlines over abstract backgrounds. Content sections tend to display a comfortable density with strong vertical rhythm, but specific section gaps can vary. There isn't a rigid grid system for content, rather a flowing arrangement of text and card-like elements. Navigation is minimal, often appearing as highly stylized text links or outlined buttons in the header/footer. Elements exhibit a sense of being intentionally 'broken' or out of place, such as widely spaced text within a minimal layout, contributing to the glitch aesthetic.

## Imagery

The visual language of imagery is abstract and graphic, leaning heavily into stylized, almost glitch-art effects. There are no traditional photographs or realistic illustrations. Instead, visuals feature abstract shapes and patterns, often with a raw, distressed, or pixelated aesthetic. The prominent use of orange and its variations (#f77647, #d53f09) suggests these are decorative, brand-specific elements, possibly serving as background textures or visual noise rather than conveying literal meaning. Icons, when present, are simple outlines or solid fills, often in Signal Green or Midnight Ink, contributing to the stark, functional yet experimental UI.

## Similar Brands

| Business | Why |
| --- | --- |
| A-COLD-WALL* | Stark, monochrome palette with strong architectural lines and a single contrasting accent color, often green or red. |
| Y-3 (Adidas x Yohji Yamamoto) | Minimalist, fashion-forward aesthetic with heavy use of black, white, and subtle, often abstract, typographic treatments. |
| Balenciaga (early Demna Gvasalia era) | Raw, almost 'ugly' aesthetic deliberately eschewing traditional elegance, paired with blocky, heavily-tracked typography and minimal color. |
| Studio Fnt (design agency) | Experimental graphic design with bold, custom typography, often using exaggerated letter-spacing, and a limited, high-contrast color palette. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #00db00
primary action: #00db00 (outlined action border)

Example Component Prompts:
Create a primary action button: Transparent background, Signal Green text (#00db00), 50% border-radius, Signal Green 1px border (#00db00), padding 1px 6px, using 'nh' font at 15px weight 400.
Create a card: Background rgba(0,0,0,0.1), 22.5px border-radius, horizontal padding 37.5px, no vertical padding. Content text using 'nh' font at 16px weight 400, Midnight Ink (#000000).
Create a heading: Use 'nh' font at 39px weight 700 with 1.07px letter-spacing, Midnight Ink text (#000000). Apply Sunset Orange (#d53f09) as a border accent if outlining is used.
Create a navigation link: Transparent background, Midnight Ink text (#000000), 0px border-radius, padding 0px, using 'nh' font at 16px weight 400 with 0.40px letter-spacing.

### Motion Philosophy

Motion interactions are moderate, with a strong preference for 'ease' timing functions over a duration of 0.35s. Key properties commonly transitioned include box-shadow (despite minimal static elevation), transform, opacity, and border-radius. This suggests subtle, smooth feedback. One intentional deviation is a cubic-bezier(0.1, 0, 0.25, 2.5) function, indicating a springy, overshoot effect likely used for key interactive elements to inject a sense of kinetic energy and distinctiveness.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520720452-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520720452-thumb.jpg |
