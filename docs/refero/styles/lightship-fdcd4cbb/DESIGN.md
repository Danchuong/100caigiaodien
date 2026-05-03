# Lightship — Refero Style

- Refero URL: https://styles.refero.design/style/fdcd4cbb-4db6-4138-9cfd-964795f1e1d6
- Site URL: https://lightshiprv.com
- ID: fdcd4cbb-4db6-4138-9cfd-964795f1e1d6
- Theme: light
- Industry: other
- Created: 2026-04-30T00:21:13.701Z
- Ranks: newest: 825, popular: 565, trending: 386

> Black & White Canvas: a crisp, high-contrast visual journey on a warm, earthy canvas.

## Description

Lightship embraces a rugged, understated aesthetic, emphasizing content through a play of stark black and white interrupted by natural textures. Typography is compact and precise, maintaining clarity across varied scales. Interactive elements are either subtly integrated or appear as stark, high-contrast outlines against the dominant photographic or canvas backgrounds. The design prioritizes visual storytelling and a confident, unembellished presentation, using a warm off-white canvas and pure black to define primary surfaces and text.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pure Black | #000000 | neutral | Primary text, strong borders, dark surface backgrounds, monochrome icons. Used for high-emphasis elements against light backgrounds |
| Canvas | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Paper White | #faf6ef | neutral | Secondary background surfaces and card fills – a warm, muted off-white providing depth to the primary Canvas |
| Subtle Gray | #999999 | neutral | Muted text, secondary borders, subtle dividers. Offers reduced contrast for less critical information |
| Outline Gray | #d9d9d9 | neutral | Hairline borders and separators, providing minimal visual interruption |
| Medium Gray | #a1a1a1 | neutral | Supporting text, decorative elements, and lower-priority informational text |
| Action Orange | #fa5c40 | accent | Decorative background accents, notably for visual emphasis in content areas |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| F37Bolton | Inter | 400, 700 | 12px, 14px, 16px, 20px, 22px, 24px, 34px, 48px, 64px, 72px, 75px | 1.00, 1.20, 1.25 | Primary brand typeface for all text content, from body to display headlines. Its compact, confident demeanor supports both functional clarity and bold statements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.25 |  |
| body-sm | 14 | 1.25 |  |
| body | 16 | 1.25 |  |
| subheading | 20 | 1.25 |  |
| heading-sm | 24 | 1.25 | -0.48 |
| heading | 34 | 1.2 |  |
| heading-lg | 48 | 1.2 | -1.44 |
| display | 75 | 1 | -2.25 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "links": "20px",
    "inputs": "100px",
    "buttons": "20px"
  },
  "elementGap": "16px",
  "sectionGap": "100px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Text Button - Dark

**Role:** Ghost

Text in Pure Black, no background or border, used for navigation and secondary actions on light backgrounds. No padding. Border radius 0px.

### Text Button - Light

**Role:** Ghost

Text in Canvas white, no background or border, primarily for navigation and secondary actions on dark backgrounds. No padding. Border radius 0px.

### Outlined Button - Light

**Role:** Ghost

Text in Canvas white with a Canvas white border (1px). Used for high-contrast actions on dark backgrounds. Border radius 20px. No padding.

### Outlined Button - Dark

**Role:** Ghost

Text in Pure Black with a Pure Black border (1px). Used for high-contrast actions on light backgrounds. Border radius 20px. No padding.

### Default Card

**Role:** Content Container

Cards maintain the flat aesthetic with `0px` border-radius and `0px` padding, adapting their background to either Canvas or Paper White, and carrying no shadow.

### Circular Input

**Role:** Text Input

Transparent background with Pure Black text and border, featuring `100px` border-radius for a pill shape. Text is centered. Padding of `24px` on left/right edges.

## Do's

- Prioritize F37Bolton weight 400 for body text at 16px with Pure Black (#000000) for high readability.
- Use Canvas white (#ffffff) for all primary page backgrounds and component surfaces to maintain a clean, bright aesthetic.
- Apply a 20px border radius to all interactive links and buttons where a radius is needed, ensuring a consistent softened edge.
- Utilize Pure Black (#000000) for all significant borders, including interactive states and menu outlines.
- Maintain minimal padding values like 8px or 16px for comfortable density in elements like list items and small components.
- Ensure all card elements have a border radius of 0px to preserve the sharp, modern edge of content blocks.
- Leverage F37Bolton weight 700 with generous sizes (48px, 64px, 75px) for headlines, using a line-height of 1.0 to 1.2 for compact impact.

## Don'ts

- Avoid using multiple chromatic colors; limit vibrant accents to the Action Orange (#fa5c40) for specific decorative purposes not as interactive states.
- Do not introduce shadows or artificial elevation, as the design system relies on flat surfaces and high-contrast outlines.
- Do not use highly saturated colors for text or primary UI elements; reserve them for decorative highlights only.
- Avoid large horizontal padding on content sections; the design uses full-bleed imagery and minimal margins for key content.
- Do not use generic system fonts; F37Bolton is core to the brand's typographic identity.
- Resist using gradients or complex background patterns; the design is characterized by solid colors and photographic content contrasting with clean UI.

## Layout

The page primarily uses a full-bleed layout for hero sections, featuring large photography with overlaying text. Subsequent sections tend towards a more constrained, centered content approach, often arranging content in asymmetric compositions or overlapping elements that break a rigid grid. Section gaps are generous, notably 100px, creating ample whitespace. Navigation is a sticky top bar with minimal links, becoming a floating, semi-transparent bar upon scroll. There are no strict card grids, but rather artfully arranged images that create dynamic visual flow.

## Imagery

The imagery features high-resolution lifestyle and product photography of outdoor adventures and the Lightship travel trailer. Photos are often full-bleed or large, contained rectangles with subtly rounded corners (sometimes 20px radius). They are primarily natural, candid, and aspirational, showcasing the product in its intended use context. The overall tone is authentic and rugged, with a focus on immersive scenes and direct product views. Icons are monochrome, simple, and outlined, used functionally within the UI.

## Similar Brands

| Business | Why |
| --- | --- |
| Rivian | Shares a focus on electric adventure vehicles, using high-quality outdoor photography and a clean, modern aesthetic with minimal UI chrome. |
| Tesla | Employs an unembellished, confident visual tone with a strong emphasis on product photography and high-contrast typography against clean backgrounds. |
| Aer | Similar high-contrast monochrome approach with subtle, warm neutrals, and a focus on product visuals and a precise typographic system. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #000000
- background: #ffffff
- border: #000000
- accent: #fa5c40
- primary action: no distinct CTA color

Example Component Prompts:
- Create a hero section: full-bleed dark photographic background. Headline 'Born for Adventure.' F37Bolton 75px, weight 700, #ffffff, line-height 1.0, letter-spacing -2.25px. Subtext 'Built in America.' F37Bolton 75px, weight 700, #ffffff, line-height 1.0, letter-spacing -2.25px.
- Create a navigation menu item: Text 'AE.1' F37Bolton 16px, weight 400, #000000. No background, no border. Border radius 0px.
- Create an outlined action button for a dark background: Text 'Register' F37Bolton 16px, weight 400, #ffffff. Background rgba(0, 0, 0, 0). Border 1px solid #ffffff. Border radius 20px. No padding.
- Create a testimonial card: Background Paper White (#faf6ef). Content heading F37Bolton 34px, weight 400, #000000, line-height 1.2. Body text F37Bolton 16px, weight 400, #000000. No border, border radius 0px, padding 24px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508451292-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508451292-thumb.jpg |
