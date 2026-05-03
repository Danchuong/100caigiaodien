# Home — Refero Style

- Refero URL: https://styles.refero.design/style/84c9c7ab-c0b5-437f-b2bf-dc2fd8a61681
- Site URL: https://www.savor.it
- ID: 84c9c7ab-c0b5-437f-b2bf-dc2fd8a61681
- Theme: light
- Industry: other
- Created: 2026-04-30T00:31:52.105Z
- Ranks: newest: 770, popular: 1138, trending: 1118

> Warm artisanal luxury

## Description

Savor's visual system evokes heritage and richness, reminiscent of artisanal food labels or classic culinary brands. It combines a warm, muted palette with striking, sophisticated typography; a bold display serif for headlines paired with a grounded sans-serif for body text. The design maintains a comfortable, open density with generous padding and spacing, featuring subtle rounded corners on interactive elements. The overall aesthetic is one of understated luxury, prioritizing a tactile, analog feel over glossy modernity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Buttermilk Cream | #fff9eb | neutral | Page backgrounds, prominent card surfaces, light text on dark backgrounds |
| Toasted Oat | #f0e7d7 | neutral | Secondary background surfaces, interactive element backgrounds (e.g., ghost buttons), subtle borders |
| Balsamic Black | #000000 | neutral | Strong contrasting text, icon fills, navigation backgrounds (rarely) |
| Cacao Ink | #370808 | brand | Primary text, critical action buttons (filled), button borders, link text, borders for focus states. This deep, warm red serves as the brand's primary accent and interactive color, providing a touch of grounded intensity |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roslindale Display Condensed | Playfair Display | 300 | 120px, 140px | 0.86, 0.90 | Primary display headlines — weight 300 gives an unexpected lightness and sophistication to large, impactful statements, creating a feeling of restrained elegance rather than shouting. The condensed form with negative letter-spacing contributes to its distinct character. |
| Suisse Intl | Inter | 400, 700 | 14px, 16px, 18px, 21px, 22px, 28px, 40px | 1.24, 1.25, 1.35, 1.45 | Body text, navigation, buttons, and all secondary headings — a clean, modern sans-serif that grounds the expressive display font, ensuring readability and professionalism across the interface. Used for most functional text. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 14 | 1.24 | -0.126 |
| body | 16 | 1.24 | -0.144 |
| subheading | 18 | 1.25 | -0.162 |
| heading-sm | 21 | 1.45 | -0.189 |
| heading-lg | 28 | 1.25 | -0.252 |
| display | 120 | 0.86 | -1.2 |

## Spacing & Shape

```json
{
  "radius": {
    "forms": "5px",
    "buttons": "5px",
    "toggles": "5px"
  },
  "elementGap": "20px",
  "sectionGap": "95px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action button

Solid `Cacao Ink` (#370808) background with `Toasted Oat` (#f0e7d7) text. Rectangular with `5px` border-radius. Padding is `20px` vertical, `42px` horizontal. Uses Suisse Intl font, weight 700.

### Secondary Outlined Button

**Role:** Alternative action button

Transparent background with `Cacao Ink` (#370808) border and text. Rectangular with `5px` border-radius. Padding is `20px` vertical, `42px` horizontal. Uses Suisse Intl font, weight 700.

### Subtle Ghost Button

**Role:** Tertiary action, internal link button

Transparent background, `Cacao Ink` (#370808) text, no border. Used for inline or less prominent actions. Padding is minimal or zero. Uses Suisse Intl font, weight 400.

### Feature Card

**Role:** Content container for features or articles

Transparent background, no border, no shadow, and `0px` border-radius. Relies on layout for distinction. Text inside uses `Cacao Ink` (#370808).

### Badge/Tag

**Role:** Informational labels

Transparent background with `Cacao Ink` (#370808) text. `0px` border-radius and `0px` padding. Used for categorical labels or metadata.

## Do's

- Prioritize `Roslindale Display Condensed` for all major headlines and `Suisse Intl` for all body text and UI elements to maintain typographic hierarchy.
- Use `Buttermilk Cream` (#fff9eb) as the dominant page background color to establish a bright, airy base.
- Apply `Cacao Ink` (#370808) for all primary actions, link text, and core interface elements where warmth and emphasis are desired.
- Maintain a clear visual rhythm with `20px` for element gaps and `95px` for section spacing.
- Ensure all interactive elements, like buttons, maintain a `5px` border-radius for a soft, approachable feel.
- Where present, use the `Cacao Ink` (#370808) on `Buttermilk Cream` (#fff9eb) color pairing to achieve AAA contrast for readability across text elements.

## Don'ts

- Avoid introducing additional chromatic colors beyond the defined `Cacao Ink` (#370808) to maintain the muted, sophisticated palette.
- Do not deviate from the specified font weights for `Roslindale Display Condensed` (300) or `Suisse Intl` (400, 700).
- Do not use generic system shadows; the system intentionally avoids elevation through shadows, relying on color and spacing for hierarchy.
- Avoid overly dense layouts; embrace comfortable spacing with `20px` element gaps and `95px` section gaps.
- Do not use sharp 0px corners on interactive components (buttons, form inputs) where a `5px` radius is specified earlier.

## Layout

The page primarily uses a max-width contained layout, though specific hero sections may appear full-bleed with content centered. The hero pattern features large, impactful text (likely the `Roslindale Display Condensed`) layered over rich, textural imagery. Section rhythm is driven by consistent vertical spacing and a flow that alternates between text-dominant blocks and striking visual elements. Content arrangement frequently features centered stacks for headlines and calls to action, providing clear visual anchors. Navigation is handled by a standard top bar, offering primary site links.

## Imagery

The visual language for imagery leans heavily into vibrant, close-up photography of textures, particularly liquid or viscous substances, with a strong emphasis on warm, golden-yellow to rich amber tones. The treatment is often abstract, pushing details and natural patterns to the forefront, serving decorative and atmospheric roles rather than explanatory content. There's an absence of lifestyle photography or product shots; the imagery acts as a mood-setter, evocative of the 'rich fats, real flavor' narrative.

## Similar Brands

| Business | Why |
| --- | --- |
| Oatly | Focus on natural ingredients with a strong brand identity and a distinct, modern sans-serif paired with a more artisanal display font. |
| Burlap & Barrel | Craft-oriented brand with rich, warm color palettes, classic typography, and an emphasis on the 'real' nature of their products. |
| Brightland | Elevated food brand using sophisticated typography, a warm, often monochromatic palette, and a focus on premium aesthetics and clean design. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #370808
- background: #fff9eb
- border: #370808
- accent: #370808
- primary action: #370808 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #370808 background, #fff9eb text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a hero headline: `Roslindale Display Condensed` font weight 300, size 140px, `Cacao Ink` (#370808) color, `0.86` line height, with letter-spacing of `-1.4px`.
3. Create body text: Suisse Intl font weight 400, size 16px, `Cacao Ink` (#370808) color, `1.24` line height, with letter-spacing of `-0.144px`.
4. Create a secondary outlined button: transparent background with a `Cacao Ink` (#370808) 1px border and `Cacao Ink` (#370808) text, Suisse Intl font weight 700, size 18px, `5px` radius, `20px` vertical and `42px` horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509080947-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509080947-thumb.jpg |
