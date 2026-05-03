# True Staging — Refero Style

- Refero URL: https://styles.refero.design/style/c26c462d-f219-4814-96da-c05e86f759b7
- Site URL: https://www.truestaging.co.uk
- ID: c26c462d-f219-4814-96da-c05e86f759b7
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:57:05.194Z
- Ranks: newest: 481, popular: 130, trending: 94

> Architectural blueprint on aged parchment

## Description

True Staging establishes a serious yet refined industrial aesthetic, using a deep gray canvas punctuated by an antiqued peachy-orange accent. Typography pairs a classic serif for large expressive headlines with a clean sans-serif for functional text, setting up a contrast between permanence and precision. Components emphasize subtle outlining and generous border radii, lending a soft, approachable feel despite the muted palette. The overall impression is one of understated luxury and meticulous craftsmanship.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Blueprint Canvas | #111111 | neutral | Page background, primary dark text, subtle borders — grounds the design in a deep, almost charcoal base |
| Parchment White | #f5efeb | neutral | Primary light text, ghost button borders, accents within a darker canvas — suggests a tactile, natural paper texture |
| Amber Peach | #f1b497 | brand | Orange outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roslindale | Playfair Display | 300 | 158px | 1.00 | Expressive display headings — its delicate weight and generous size at 158px create an authoritative, almost monumental statement of luxury. |
| Alliance | Inter | 400, 500, 600 | 9px, 12px, 14px, 28px | 1.00, 1.15, 1.20, 1.30, 1.50, 1.71 | Functional text including body, navigation, and button labels — its versatility across weights and compact letter spacing ensures clear information delivery. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.2 | 0.02 |
| subheading | 28 | 1.3 | -0.02 |
| display | 158 | 1 | -0.02 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "80px",
    "otherElements": "80px",
    "navigationItems": "80px"
  },
  "elementGap": "8px",
  "sectionGap": "53px",
  "cardPadding": "21px",
  "pageMaxWidth": null
}
```

## Components

### Hero Headline

**Role:** Primary page title

Uses Roslindale at 158px, weight 300, with a letter-spacing of -0.0200em, in Parchment White (#f5efeb). Placed centrally, defining the page's grand statement.

### Ghost Navigation Item

**Role:** Secondary navigation and non-primary actions

Text in Alliance, Parchment White (#f5efeb), 9px, weight 400. Has a 1px border in Parchment White (#f5efeb) with an 80px border-radius, creating a pill shape. Padding is 7.7px vertical and 21px horizontal. Transparent background.

### Primary Action Button

**Role:** Call to action button for 'Our Work'

Filled with Amber Peach (#f1b497) background. Text is Alliance, Parchment White (#f5efeb), 9px, weight 400. Features an 80px border-radius. Padding is 7.7px vertical and 21px horizontal. Appears as a pill-shaped element.

### Body Text

**Role:** Standard informative text

Uses Alliance, Blueprint Canvas (#111111) or Parchment White (#f5efeb) depending on section background, at 14px, weight 400. Tight letter spacing for efficient reading.

### Footer Detail Text

**Role:** Copyright and minor informational text

Alliance, 9px, weight 400, in Parchment White (#f5efeb).

## Do's

- Always use Blueprint Canvas (#111111) for page backgrounds and primary dark text.
- Apply Parchment White (#f5efeb) for primary light text on dark backgrounds and for ghost button borders.
- Reserve Amber Peach (#f1b497) for key accents, selected navigation highlights, and the primary 'Our Work' button fill.
- Employ Roslindale (sub: Playfair Display) for large, expressive headlines (158px, weight 300, ls -0.0200em) to convey gravitas.
- Utilize Alliance (sub: Inter) for all functional text, varying weights (400, 500, 600) and sizes (9px, 12px, 14px) as needed for hierarchy.
- Implement an 80px border-radius for all interactive elements like buttons and navigation items to maintain a consistent soft, pill-like shape.
- Maintain a compact spacing density, with an element gap of 8px and section vertical spacing of 53px.

## Don'ts

- Do not introduce bright, vibrant colors; maintain the muted, earthy palette of Blueprint Canvas, Parchment White, and Amber Peach.
- Avoid sharp, angular corners; consistently apply the 80px border-radius for all applicable UI elements.
- Do not use generic system fonts for display headings; Roslindale's unique character is central to the brand's sophisticated feel.
- Avoid excessive use of elevation or heavy shadows; the system relies on subtle borders and color shifts for separation.
- Do not deviate from the defined letter-spacing values for Alliance; precise tracking is essential for its compact appearance.
- Do not use Parchment White (#f5efeb) on amber backgrounds due to insufficient contrast (1.6:1 ratio).
- Avoid making any element overtly 'loud'; the design emphasizes understated luxury through subtle contrasts and refined details.

## Layout

The page employs a full-bleed layout, particularly for the hero section, which features a large, centered headline over an architectural graphic background. Content is centrally aligned within this wide canvas, using large, negative space. The header features right-aligned navigation items, subtly outlined. Subsequent content sections appear to follow a consistent vertical rhythm, though specific sectioning is less explicit than a banded approach; instead, it relies on visual weight and typography.

## Imagery

The site uses subtle, abstract blueprint-style graphics overlaid on a textured dark background for atmospheric effect. These graphics are largely monochromatic, serving as an underlying visual motif rather than direct content. All imagery is decorative, establishing a mood of construction and precision, without featuring photography or product showcases. The density is image-light, with UI and typography dominating the visual space.

## Similar Brands

| Business | Why |
| --- | --- |
| Fendi | Monochromatic palette, large serif typography, and a focus on subtle textures create a similar luxury brand experience with understated elegance. |
| Bottega Veneta | Understated branding, high-contrast typography, and a tactile, natural color palette evoke a comparable sense of refined craftsmanship. |
| Linear | Uses a dark, technical background with strong geometric elements and precise, functional typography, albeit in a more modern context. The focus on precision and subtle interactions is similar. |
| Acme Co. | Another fictional example that might use a single, muted accent color against a largely grayscale UI, employing elegant serif fonts for impact. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #f5efeb
background: #111111
border: #f5efeb
accent: #f1b497
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.


Generate two columns of text in a section with a Blueprint Canvas background: Left column with subheading 'Set builders for live events & luxury retail experiences.' in Alliance 28px weight 400, #f5efeb. Right column with body text 'YOUR DESIGNS: MADE REALITY...' in Alliance 14px weight 400, #f5efeb, with a margin-bottom of 14px after initial line.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514205757-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514205757-thumb.jpg |
