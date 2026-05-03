# Stykka — Refero Style

- Refero URL: https://styles.refero.design/style/b43fdb3c-85e9-4282-9262-1d3deb4b679d
- Site URL: https://stykka.com
- ID: b43fdb3c-85e9-4282-9262-1d3deb4b679d
- Theme: light
- Industry: design
- Created: 2026-04-30T02:22:24.772Z
- Ranks: newest: 384, popular: 640, trending: 489

> Architectural blueprint on white marble

## Description

Stykka's visual system evokes a sense of understated craftsmanship and natural permanence. It combines a restrained, almost monochromatic palette with a strong typographic presence and material-focused imagery. The design is airy and structured, using subtle layering and natural light to highlight content rather than bold colors or heavy UI elements. Typography varies between a clean sans-serif for main content and a distinctive monospaced font for key statements, creating an intentional rhythm.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Primary text, main headings, critical UI strokes, page background overlay in hero sections. Its deep, pure black anchors the otherwise light design |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, secondary text in dark contexts. Provides a clean, expansive base |
| Ash Gray | #f6f6f6 | neutral | Subtle background tones, dividers, and ghost buttons for elements that need to recede slightly from Canvas White |
| Medium Gray | #2e2e20 | neutral | Secondary text, muted icons, and subtle borders where Absolute Zero would be too dominant |
| Light Gray | #c9c9c9 | neutral | Hairline borders, subtle separators, and inactive states for minimal visual interruption |
| Translucent Gray Lite | #00000008 | neutral | Subtle, near-invisible overlays or very faint box shadows, adding a hint of depth without starkness |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500 | 11px, 14px, 16px, 22px, 24px, 30px, 46px | 1.00, 1.05, 1.10, 1.20, 1.25, 1.50 | Versatile workhorse sans-serif for body text, subheadings, and navigation. Its slightly condensed forms maintain compactness while remaining legible. |
| Azeret Mono | monospace | 400 | 18px | 1.00 | Distinctive monospaced font used for key declarations and hero typography, adding a technical, crafted aesthetic through its wide letter-spacing and uniform width. |
| sans-serif | system-ui, sans-serif | 400 | 12px | 1.20 | Small functional text for captions, metadata, and fine print. Default system font ensures wide compatibility for less critical content. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 | 0.23 |
| body | 14 | 1.5 | 0.294 |
| heading-sm | 18 | 1 | -0.18 |
| heading | 22 | 1.25 | -0.803 |
| heading-lg | 24 | 1.25 | -0.888 |
| display | 30 | 1.05 | -1.2 |
| display-lg | 46 | 1 | -1.932 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "buttons": "8px",
    "navigation": "8px"
  },
  "elementGap": "10px",
  "sectionGap": "30px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Primary Button

**Role:** Call to action button for primary user actions, designed to integrate subtly into the layout.

Text color Absolute Zero (#000000). Transparent background. Border color Absolute Zero (#000000). Border radius 8px. Padding 10px vertical, 36px horizontal. Uses 'Stykka Blue' for link action per original data, but rendered `transparent`/`#000000` from page. Needs explicit definition for functional link-blue to be present on actual usage.

### Information Card

**Role:** Container for showcasing features, testimonials, or short content blocks.

Background color Ash Gray (#f6f6f6). No box shadow. Border radius 16px. Padding 33px vertical, 24px horizontal. These cards have no explicit border, creating a floating appearance.

### Navigation Link

**Role:** Standard navigation item in header and footer.

Text color Absolute Zero (#000000). Interactive border bottom color Absolute Zero (#000000) for hover/active states at 1px thickness. Default line height 1.20.

## Do's

- Use Canvas White (#ffffff) as the primary background for all page sections unless an image or specific brand block dictates otherwise.
- Apply Absolute Zero (#000000) for all primary text content and main headings to maintain stark contrast and strong legibility.
- Ensure large headlines, particularly in hero sections, use Azeret Mono 400 with a wide letter spacing of -0.010em and a line height of 1.0.
- Group related UI elements with an element gap of 10px to maintain a slightly compact but clear arrangement.
- Implement a border-radius of 16px for all card-like containers, and 8px for buttons and interactive navigation elements.
- Use Ash Gray (#f6f6f6) sparingly for subtle background distinctions or low-prominence UI elements, such as card backgrounds that are not meant to pop.
- For ghost buttons, define text and border in Absolute Zero (#000000) with a transparent background, ensuring a subtle call to action.

## Don'ts

- Avoid using highly saturated colors for backgrounds or large UI areas; maintain a largely monochromatic base palette.
- Do not introduce strong box shadows or heavy elevation effects; the design relies on subtle background shifts and natural light.
- Do not deviate from the specified negative letter spacing for large type; it is a signature element of the typographic style.
- Do not use generic, unstyled links. All links should explicitly reference Absolute Zero for text, with optional border-bottom interaction states.
- Avoid arbitrary custom padding values for cards and buttons; stick to the defined 33px vertical / 24px horizontal for cards and 10px vertical / 36px horizontal for buttons.
- Do not introduce decorative gradients or complex overlays; keep surfaces and backgrounds clean and simple.
- Do not use system sans-serif for headlines or main body text; it is reserved for captions and minor functional text.

## Layout

The page uses a maximum content width, centered horizontally, alternating with full-bleed hero sections. The initial hero features a full-width background image with strong visual depth, overlaid with centered, large-scale typography. Subsequent sections follow a consistent vertical rhythm with clear spacing between content blocks. Content is primarily arranged in multi-column grids or alternating text-and-image layouts, often with text on the left and visuals on the right, or a 4-column card grid. The navigation is a sticky top bar with minimal links on the far left and right. Density is balanced, with generous white space around elements and sections.

## Imagery

The visual language is dominated by high-quality photography of wooden architectural spaces and kitchen interiors. Images are typically full-bleed or large blocks, featuring natural light and honest materiality. Product photography uses tight crops focusing on the crafted details of the kitchen elements. There's an absence of abstract graphics or illustrations, emphasizing real-world context and tangible quality. Icons are minimal, subtle, and monochromatic, primarily used for navigation or small functional elements. The density is image-heavy, serving as primary content rather than mere decoration.

## Similar Brands

| Business | Why |
| --- | --- |
| Frama | Shares a monochromatic palette, natural material focus in photography, and a clean, architectural aesthetic with minimal UI ornaments. |
| B&B Italia | Employs high-quality product photography, understated typography, and a structured layout to emphasize craftsmanship and design purity. |
| Muuto | Features a similar light-themed, Scandinavian design aesthetic with an emphasis on natural textures, clear typography, and spacious layouts. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000 (for ghost buttons/interactive borders), #c9c9c9 (for hairline dividers)
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Create an Information Card: Headline 'SUPERIOR BUILD QUALITY' (Inter, 500, 22px, lh 1.25, ls -0.803px). Body text 'Built to last. Real wood...' (Inter, 400, 16px, lh 1.5, ls -0.368px). Background color #f6f6f6, no shadow, 16px border radius, 33px vertical padding, 24px horizontal padding. Include an image above the text.
3. Create a Hero Section Headline: Text 'B u i l t t o l a s t'. Font: Azeret Mono, weight 400, size 46px, line height 1.0, letter spacing -1.932px, color #ffffff. Position this text over a full-bleed dark background image.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515724840-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515724840-thumb.jpg |
