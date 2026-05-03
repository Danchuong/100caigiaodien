# Stripe Press — Refero Style

- Refero URL: https://styles.refero.design/style/54f257e9-1d6b-4410-b94a-1dfe648ecc87
- Site URL: https://press.stripe.com
- ID: 54f257e9-1d6b-4410-b94a-1dfe648ecc87
- Theme: dark
- Industry: media
- Created: 2026-01-14T15:15:24.000Z
- Ranks: newest: 1318, popular: 33, trending: 242

> Library of Curated Volumes — each radiating its own quiet brilliance.

## Description

Stripe Press evokes the gravitas of a classic library reinterpreted for a digital age. Dominant dark surfaces create a hushed atmosphere, where content is spotlighted with precision. The color palette, rather than being unified, exists as a series of rich, distinct individual 'book spines' — each book module presenting a unique thematic combination of subdued background and a singular, vibrant accent. This creates a compelling visual tension between the system's austere background and the vivid yet controlled bursts of color on each item, giving each publication its own distinct visual identity within a consistent framework.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Slate | #222222 | neutral | Primary page background, general surface. The canvas against which all other elements are presented, providing a deep, consistent visual anchor. |
| Rich Mocha | #201819 | neutral | Background for certain interactive elements or sections, offering a slightly warmer, off-black variant for subtle depth contrast. |
| Ink Black | #000000 | neutral | Text for light backgrounds (not currently prevalent but present in the data), subtle borders, icons. Used when maximum contrast is needed against lighter neutrals. |
| Digital White | #ffffff | neutral | Primary text color against dark backgrounds, iconography, borders on dark elements. The main bright element that draws attention to content. |
| Ash Gray | #d0d1d4 | neutral | Subtle text and accents against dark backgrounds, providing slightly lower contrast than Digital White. |
| Pale Stone | #dbdbdb | neutral | Decorative lines, muted borders, or backgrounds where a very light neutral is needed against a dark surface. |
| Amber Parchment | #dfc78 | brand | Accent text and borders for specific 'book' modules, evoking aged paper or a golden glow. This color is one of the many distinct identity markers for individual books. |
| Indigo Ink | #18185 | brand | Accent text and borders for specific 'book' modules, providing a deep, intellectual pop of color. Distinct identity. |
| Rose Bloom | #ebadcb | brand | Accent text and borders for specific 'book' modules, offering a softer, delicate counterpoint. Distinct identity. |
| Cerulean Haze | #dee6ff | brand | Accent text and borders for specific 'book' modules, a cool, almost metallic bright. Distinct identity. |
| Terra Cotta | #e48244 | brand | Accent text and borders for specific 'book' modules, a grounded, warm accent. Distinct identity. |
| Crimson Blaze | #ff4445 | brand | Accent text and borders for specific 'book' modules, a bold and energetic marker. Distinct identity. |
| Midnight Violet | #0b1743 | brand | Accent text and borders for specific 'book' modules, a dark, rich, and mysterious tone. Distinct identity. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Ivar Headline | Georgia | 400, 600 | 15px, 16px, 17px, 18px, 21px | 1.00, 1.20, 1.30, 1.50 | Headlines and prominent navigation items. Its refined form combined with a slightly larger letter-spacing provides a sense of considered elegance. The range of weights allows for hierarchy where 400 is dominant and 600 provides emphasis. |
| Ivar Text | Lora | 400, 500 | 14px, 16px, 17px, 18px, 25px | 1.00, 1.20, 1.30, 1.40, 1.50 | Body text, subheadings, and more detailed descriptions. The serif style lends an academic, timeless feel. Its slightly tighter letter-spacing ensures readability in longer passages. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 15 | 1.3 |  |
| body-sm | 16 | 1.3 |  |
| body | 17 | 1.3 |  |
| body-lg | 18 | 1.3 |  |
| heading-sm | 21 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "all": "2px"
  },
  "elementGap": "4-24px",
  "sectionGap": "20-30px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Book Spine Cards Stack



### Stripe Press Header Logo + Tagline



### Scroll Progress Indicator



### Book Card (Generic)

**Role:** Informational display

Represents an individual book. Features a background color typically distinct from the page (e.g., #131831, #6e665b, #4d1a28, #c1b676, #93935f), with title, author, and description text in a contrasting accent color (e.g., #dfc78, #ebadcb, #18185, #dee6ff, #e48244, #ff4445, #0b1743). Typography for title and author uses `Ivar Headline` and `Ivar Text` respectively, with line-heights adjusted to fit the book-spine metaphor. Borders are 0px, radius 0px, creating sharp, stacked block visuals. Padding is intentionally zero to contain the full 'book' graphic.

### Header Navigation Link

**Role:** Primary navigation

Text link within the header, typically using `Ivar Headline` at 15px weight 400. Color is `Digital White` (#ffffff) against the dark background. No explicit padding or border, relying on natural letter spacing and positioning for visual separation.

### Scroll Indicator

**Role:** Global navigation/progress

Vertical bar on the left side, indicating scroll position. Consists of small, rectangular elements (effectively buttons or indicators at 2px radius, with 5px vertical padding). Background is transparent, text color `Digital White` (#ffffff).

### Newsletter Subscribe Input

**Role:** Form Element

Input field for email subscription. Background color `rgba(0, 0, 0, 0.067)` (almost transparent dark), text `Ink Black` (#000000) (unlikely, likely text on light background), 0px border radius, with minimal padding (1px top/bottom, 2px right, 8px left). This suggests it appears on a lighter background section.

### Subtle Text Link (Footer)

**Role:** Secondary navigation/information

Links found in less prominent areas like the footer. Text color `Ink Black` (#000000) implying a white or very light background. Uses `Ivar Text` at smaller sizes.

## Do's

- Prioritize `Deep Slate` (#222222) as the default page background for a consistent dark theme.
- Use `Digital White` (#ffffff) for all primary text against dark backgrounds, maintaining high contrast.
- Apply `Ivar Headline` at 15px weight 400 with `letter-spacing: 0.015em` for all navigation and prominent headers.
- Ensure all interactive elements (like book cards) have a distinct accent color for their text and a contrasting background, drawing from the `brand` group.
- Maintain a 0px border radius for most elements and a sharp 2px for subtle interactive components like scroll indicators, preserving the precise, angular aesthetic.

## Don'ts

- Avoid generic button styles with borders or solid background colors, as buttons are primarily represented by the 'book' aesthetic.
- Do not introduce strong drop shadows, as the system relies on distinct background colors for depth and separation.
- Do not deviate from the `Ivar Headline` and `Ivar Text` fonts; custom typography is a core identity element.
- Refrain from using gradients on surfaces or text; this design relies on solid, distinct color blocks.
- Avoid highly rounded corners; the dominant shape is rectangular, with minimal 2px radii for specific components.

## Layout

The page primarily uses a full-bleed dark background, creating an expansive, immersive environment. The main content area is centered and appears to stack individual 'book' modules vertically with minimal vertical spacing, creating the impression of an endlessly scrolling library shelf. The hero introduces the brand with a clear, left-aligned logo and title. A distinctive vertical scroll indicator is fixed to the left edge, reinforcing the sequential, scroll-driven interaction model. There is no strong grid structure for primary content beyond vertical stacking, as each 'book' object is a self-contained visual unit that fills its horizontal allocation. The subtle footer elements suggest a conventional two-column bottom alignment for supplementary links and information against a lighter background section.

## Imagery

The visual language is primarily product-focused, showcasing each 'book' as a distinct three-dimensional object, akin to physical book spines. These renders are highly detailed, featuring different textures, material properties (matte, metallic sheen, paper), and unique graphic design tailored to each publication. There is no photography of people or lifestyle; the focus is entirely on the artifacts. Imagery acts as the primary content differentiator and visual anchor, occupying significant space and presented in a stacked, sequential manner. Icons (e.g., the menu and scroll indicator) are minimal, monochromatic, and outline-based, serving purely functional roles without decorative embellishment.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Dark, minimalist aesthetic with focus on content blocks as distinct entities, albeit with greater visual variation in content types. |
| Some literary magazines (e.g., The Paris Review online) | Strong emphasis on typography and an elevated, thoughtful aesthetic, often with a darker reading experience. |
| Record label sites like Ghostly International | Dark backgrounds, strong individual artwork for each 'product', and a navigation that feels like a curated collection rather than a standard store. |
| Portfolio sites of designers specializing in editorial | Often feature projects as distinct, visually rich blocks on a neutral background, highlighting individual craftsmanship. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (Dark BG): `#ffffff` (Digital White)
- Page Background: `#222222` (Deep Slate)
- Accent (Example 1): `#dfc78e` (Amber Parchment)
- Accent (Example 2): `#18185e` (Indigo Ink)
- Accent (Example 3): `#ebadcb` (Rose Bloom)

### 3-5 Example Component Prompts
1. Create a `Header Navigation Link`: Text 'About' in `Ivar Headline` font, 15px, weight 400, line-height 1.5, color `#ffffff` (Digital White), letter-spacing -0.3px.
2. Render a `Book Card` module: Background color `#131831`. Text 'The Origins of Efficiency' in `Ivar Headline` font, 18px, weight 400, line-height 1.3, color `#dee6ff` (Cerulean Haze), letter-spacing -0.36px. Below, 'Brian Potter' in `Ivar Text` font, 16px, weight 400, line-height 1.4, color `#dee6ff` (Cerulean Haze), letter-spacing -0.32px.
3. Design a `Scroll Indicator` item: Background transparent. `Digital White` (#ffffff) color for any internal icon/text. Border radius 2px. Padding 5px top/bottom. Dimensions and positioning should replicate the vertical sidebar on the left.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775922609153-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775922609153-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/54f257e9-1d6b-4410-b94a-1dfe648ecc87-1777555739786-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/54f257e9-1d6b-4410-b94a-1dfe648ecc87-1777555739786-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/54f257e9-1d6b-4410-b94a-1dfe648ecc87-1777555739786-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/54f257e9-1d6b-4410-b94a-1dfe648ecc87-1777555739786-preview-detail-poster.jpg |
