# Fiz — Refero Style

- Refero URL: https://styles.refero.design/style/ab0a904b-3a49-4114-9efc-965022a6340e
- Site URL: https://www.davidfiz.com
- ID: ab0a904b-3a49-4114-9efc-965022a6340e
- Theme: light
- Industry: design
- Created: 2026-04-30T03:49:20.173Z
- Ranks: newest: 54, popular: 1249, trending: 1249

> architectural blueprint on concrete

## Description

Fiz's visual identity balances stark minimalism with subtle material warmth, drawing heavily on a monochrome palette of near-black text on a muted, almost concrete-like light gray canvas. The design prioritizes readability and directness through compact typography and a deliberate lack of decorative elements. Interaction is framed by crisp, thin strokes and a single contrasting brand accent when an action is taken, focusing attention without visual clutter. The overall effect is one of quiet efficiency and grounded sophistication.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Gray | #d1cfce | neutral | Page background, primary surface |
| Pure White | #ffffff | neutral | Card backgrounds, modal surfaces, content blocks, border accents |
| Midnight Ink | #18100c | neutral | Primary text, headings, link text for default and hover states. This near-black provides strong contrast against lighter surfaces |
| Muted Gray | #696867 | neutral | Secondary text, descriptive elements, subtle borders for inactive states |
| Brand Black | #000000 | brand | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Haas Unica W 1 G | Helvetica Neue | 500 | 13px | 1.20 | Primary text for navigation, links, and detailed information. Its compact nature and medium weight maintain legibility in dense lists. |
| Inter | Inter | 500 | 16px | 1.20 | Descriptive text and body copy in content areas. Its contemporary feel complements the streamlined aesthetic. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "0px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "8px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Text link for primary navigation items.

Uses Neue Haas Unica W 1 G, weight 500, 13px, with Midnight Ink (#18100c) text on Canvas Gray (#d1cfce). Underlined on hover or active state.

### Category Listing Item

**Role:** Numbered link items for project categories.

Uses Neue Haas Unica W 1 G, weight 500, 13px, Midnight Ink (#18100c) text on Canvas Gray (#d1cfce). Has no explicit background or border, relying on spacing for separation.

### Ghost Button

**Role:** Secondary interactive elements, such as 'Menu' and 'Visit' buttons.

Transparent background with a 1px Midnight Ink (#18100c) border. Text is Neue Haas Unica W 1 G, weight 500, 13px, in Midnight Ink (#18100c). No border radius, dimensions are 8px padding vertically/horizontally.

### Filled Action Button

**Role:** Primary call to action.

Solid Brand Black (#000000) background with Pure White (#ffffff) text (Neue Haas Unica W 1 G, weight 500, 13px). No border radius. Padding is 16px horizontal and 8px vertical at minimum.

### Main Logo (text)

**Role:** Site identifier, primary brand mark.

Uses Inter, weight 500, 16px, in Midnight Ink (#18100c) against Canvas Gray (#d1cfce).

## Do's

- Use Canvas Gray (#d1cfce) as the dominant page background.
- Apply Midnight Ink (#18100c) for all primary text and link text to ensure high contrast.
- Maintain a strict 0px border-radius for all interactive elements and containers, reflecting the sharp, geometric aesthetic.
- Structure all content with a base unit of 8px for element spacing and padding.
- Utilize a 1px solid border in Midnight Ink (#18100c) for 'ghost' button styles to define interactive areas without adding heavy fills.
- Implement Brand Black (#000000) solely for primary action buttons, ensuring they stand out by color and fill.
- Adhere to a compact line height of 1.2 for both Neue Haas Unica W 1 G and Inter fonts, maximizing information density.

## Don'ts

- Avoid using border-radius values other than 0px; the system is built on sharp corners.
- Do not introduce highly saturated colors for functional UI elements; color is used sparingly and deliberately.
- Do not use drop shadows or complex elevation; surfaces are flat and defined by color shifts and borders.
- Avoid large, decorative typography features in headlines or section titles; maintain the compact type scale.
- Do not use generic, unbranded text links; always ensure links either use Midnight Ink (#18100c) and are subtly distinguished.
- Do not use images or visual elements that break outside the content frame or use overly organic shapes; maintain a composed, structured layout.
- Avoid varying letter-spacing; all text should use 'normal' letter-spacing except where explicitly defined by the font itself.

## Layout

The page exhibits a contained, centered layout, where content is presented within a defined horizontal maximum width, but the background appears to expand fully. The hero section features a prominent, large visual filling a significant portion of the screen, with minimal UI elements overlaid. The overall section rhythm is consistent vertical spacing, often with strong visual separations created by distinct content blocks or imagery. Content is mostly arranged in stacked, centered blocks or text-heavy lists. Navigation is minimal, limited to a simple left-aligned text list and a few compact buttons, emphasizing content over complex site structure.

## Imagery

This site features primarily photography, often presented as large, central visual anchors. The treatment is full-bleed within a contained area, with sharp, unmasked edges, emphasizing the raw, unedited nature of the image. The photography style appears to be product-focused or process-oriented, with high-detail focus and natural lighting. Imagery serves primarily as a decorative atmosphere and content showcase, with a high visual density relative to text in the hero area, establishing a visual gravity.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Shares a utilitarian, content-first approach with minimal UI chrome, monochrome palette, and emphasis on clear typography. |
| Studio—Luft | Employs a stark, architectural aesthetic with strong type, high contrast, and restrained use of color, often against a muted background. |
| Superside | Features a direct, no-frills presentation of portfolio work, using clear text on simple backgrounds, reflecting a professional and focused tone. |
| Actual Source | Utilizes a strong typographic focus and a compact, structured layout, often with minimal visual adornment, to showcase content. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #18100c
background: #d1cfce
border: #18100c
accent: #000000
primary action: no distinct CTA color

Example Component Prompts:
1. Create a project listing: text '01 Kunsthalle Basel' using Neue Haas Unica W 1 G, weight 500, 13px, #18100c. Background #d1cfce. No borders or radius.
2. Create a 'Menu' button: ghost style, 1px #18100c border, #ffffff background, 0px radius. Text 'Menu' using Neue Haas Unica W 1 G, weight 500, 13px, #18100c. Padding 8px.
3. Create a 'Plan your visit' button: #000000 background, #ffffff text (Neue Haas Unica W 1 G, weight 500, 13px), 0px radius. Padding 8px vertical, 16px horizontal.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520941782-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520941782-thumb.jpg |
