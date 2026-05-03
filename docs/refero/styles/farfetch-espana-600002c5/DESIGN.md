# FARFETCH España — Refero Style

- Refero URL: https://styles.refero.design/style/600002c5-c5f5-4df0-adf6-6324ee6255c0
- Site URL: https://farfetch.com
- ID: 600002c5-c5f5-4df0-adf6-6324ee6255c0
- Theme: light
- Industry: ecommerce
- Created: 2026-03-11T13:03:14.000Z
- Ranks: newest: 1053, popular: 446, trending: 685

> Gallery Wall of Luxury — crisp white walls, perfect lighting, and all attention drawn to the curated pieces within.

## Description

This design system projects an image of understated luxury and clarity, functioning as a high-end catalogue. Its visual identity is defined by a rigorous absence of ornamentation: no rounded corners, no shadows, and a near-monochromatic palette. The stark black and white contrast ensures maximum legibility for product names and prices, while a generous use of negative space around imagery elevates each item. Functionality and navigation are prioritized through minimal but distinct interactive elements, allowing the curated product visuals to dominate the user's attention. The uniform straight edges and deliberate lack of visual flair ensure content takes center stage, like a gallery.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Raven Black | #222222 | neutral | Primary text, button backgrounds for emphasis, borders – providing stark contrast against white backgrounds. |
| Polar White | #ffffff | neutral | Page backgrounds, card surfaces, interactive text on dark buttons – creates an expansive, clean canvas. |
| Cloud Gray | #e6e6e6 | neutral | Subtle section dividers, background for non-primary content areas – gently breaking up white space without introducing strong color. |
| Ash Gray | #b6b6b6 | neutral | Secondary text, disabled states, subtle iconography – a subdued tone for less critical information, providing appropriate visual hierarchy. |
| Ghost White | #f5f5f5 | neutral | Navigation backgrounds, subtle background variation – provides a soft break from pure white without being noticeable. |
| Steel Gray | #727272 | neutral | Tertiary text, subtle borders, inactive icon states – for highly subordinate information. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Farfetch Basis | system-ui, sans-serif | 400, 700 | 13px, 15px, 22px, 30px | 1.20, 1.27, 1.31, 1.33 | Headlines, body text, navigation, buttons, and form inputs – its custom sans-serif design contributes to the clean, modern feel, prioritizing legibility at all text sizes without visual frills. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.33 |  |
| body | 15 | 1.31 |  |
| subheading | 22 | 1.27 |  |
| heading | 30 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "48px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Announcement Banner + Search Bar



### Section Category Cards — Elige una sección



### Fashion Category Grid — Moda para mujer



### Invisible Action Button

**Role:** Navigation, product links, and interactive text elements.

Text-only, no background or border, `color: #222222`. Used for primary navigation items and quick links within content. `padding: 0px`.

### Outline Accent Button

**Role:** Secondary calls to action, filtering, or options with less emphasis.

Background `color: #ffffff`, `color: #222222`, `border: 1px solid #222222`, `radius: 0px`, `padding: 10px 16px`.

### Solid Primary Button

**Role:** Main calls to action like 'Suscríbete'.

Background `color: #222222`, `color: #ffffff`, `radius: 0px`, `padding: 10px 16px`.

### Product Image Card (Default)

**Role:** Displaying product images without additional visual context.

Background `color: rgba(0, 0, 0, 0)`, `border-radius: 0px`, `box-shadow: none`, `padding: 0px`.

### Product Info Card (Padded)

**Role:** Displaying products or categories with associated text information.

Background `color: #ffffff`, `border-radius: 0px`, `box-shadow: none`, `padding: 16px`.

### Text Input (Underlined)

**Role:** Search bars and general text inputs.

Background `color: rgba(0, 0, 0, 0)`, `color: #222222`, `border-bottom: 1px solid #222222`, `padding-left: 0px`, `padding-top: 1px`.

### Text Input (Boxed)

**Role:** Less common inputs, potentially in forms or settings.

Background `color: #ffffff`, `color: #222222`, `border: 1px solid #222222`, `padding-left: 16px`, `padding-top: 0px`.

## Do's

- Prioritize `Polar White` (#ffffff) backgrounds with `Raven Black` (#222222) text for maximum contrast and legibility.
- Use `Farfetch Basis` font at weight 400 for all body copy and weight 700 for headings, maintaining a consistent typographic voice.
- Apply `0px` border-radius to all interactive elements, cards, and containers to reinforce the sharp, precise aesthetic.
- Utilize `16px` padding for internal content within cards and `48px` vertical spacing between major sections for comfortable density.
- Maintain a monochromatic palette, using `Ash Gray` (#b6b6b6) only for secondary text or disabled states, never as an accent.

## Don'ts

- Do not introduce shadows or any form of elevation (box-shadow) on any component; depth is created through content hierarchy and color contrast.
- Avoid using any colors outside of the defined neutral palette; no brand or accent colors are present, maintaining a strict, minimalist approach.
- Do not use `border-radius` values greater than `0px` on any element, as this clashes with the sharp, rectilinear visual style.
- Refrain from varying letter-spacing; all text uses `normal` letter-spacing.
- Do not use gradients; the design relies on solid colors and sharp transitions.

## Layout

The page exhibits a max-width, centered layout with side margins on screens larger than the content. The hero section, if present, is a simple row of category image cards. The overall page model is a consistent grid-based structure, prominently featuring image-dominant cards. Section rhythm is uniform, with generous vertical spacing (around `48px` to `72px`) between content blocks, ensuring a spacious and uncrowded feel. Content is arranged primarily in multi-column grids (like 3-column for categories and sub-categories, 4-column for products) with alternating image and text blocks, facilitating browsing. The navigation is a sticky top bar, containing essential links and search, consistently minimal.

## Imagery

Imagery is the focal point, consisting primarily of high-quality product photography and model shots. Photos are tightly cropped, often on neutral grey or white backgrounds, or within minimal architectural settings, emphasizing the product or fashion item. Treatment is typically full-bleed within their card containers, with sharp, raw edges, implying a 'cut-out' aesthetic that prioritizes the subject. The style is aspirational; models are posed in a natural, yet poised manner, often with a muted color palette to keep focus on the clothing. Density is image-heavy, driving navigation and product discovery, with text serving as concise supporting information.

## Similar Brands

| Business | Why |
| --- | --- |
| Net-a-Porter | Shares a monochromatic, luxurious aesthetic driven by high-quality product photography and minimal UI elements. |
| SSENSE | Employs a stark black and white color scheme, sharp edges, and a content-forward approach where images are paramount. |
| Zara | Exhibits a similar focus on large, dominant imagery and a minimalist grid layout for product presentation. |
| MATCHESFASHION | Features a clean, editorial layout with a strong emphasis on visuals and subtle brand interactions. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #222222
- Background: #ffffff
- CTA Background: #222222
- CTA Text: #ffffff
- Border: #222222

### 3 Example Component Prompts
1. Create a `Solid Primary Button` for 'Subscribe': Background `color: #222222`, text `color: #ffffff`, font `Farfetch Basis` weight 700, size 15px, `line-height: 1.31`, `border-radius: 0px`, `padding: 10px 16px`.
2. Design a `Product Info Card` for a new arrival: Background `color: #ffffff`, `border-radius: 0px`, `box-shadow: none`, `padding: 16px`. Inside, use `Farfetch Basis` weight 400, size 15px, `color: #222222` for the product name with a `10px` bottom margin.
3. Implement a `Text Input (Underlined)` component for a search field: Background `color: rgba(0, 0, 0, 0)`, text `color: #222222`, `border-bottom: 1px solid #222222`, `border-radius: 0px`, `padding-top: 1px`, `padding-left: 0px`. Placeholder text should be `Ash Gray` (#b6b6b6).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775943849475-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775943849475-thumb.jpg |
