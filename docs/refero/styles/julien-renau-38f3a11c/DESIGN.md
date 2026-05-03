# Julien Renau — Refero Style

- Refero URL: https://styles.refero.design/style/38f3a11c-ac61-40f3-934e-088d8dbb9467
- Site URL: https://julienrenau.com
- ID: 38f3a11c-ac61-40f3-934e-088d8dbb9467
- Theme: light
- Industry: design
- Created: 2026-04-30T03:52:16.383Z
- Ranks: newest: 41, popular: 1183, trending: 1160

> Architectural Blueprint Grid: Pure white canvas delineated by ultra-fine graphite lines, creating a structured, content-rich display.

## Description

Julien Renau's site establishes a stark, monochrome aesthetic with a strong emphasis on precise spacing and subtle typography. Content is presented in an architectural grid, using strong horizontal and vertical lines as visual dividers. The design relies on achromatic colors for all elements, creating a highly structured and understated presentation. Typography is compact and confidently spaced, maintaining clarity amidst the dense layout.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page background, primary surface for content blocks |
| Charcoal Text | #272727 | neutral | Primary text color for headings and body content, prominent borders for UI elements |
| Graphite Black | #000000 | neutral | Strongest text contrast, prominent borders, decorative strokes, and occasional dark backgrounds for specific elements |
| Fog Gray | #ebebeb | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Muted Ash | #979797 | neutral | Secondary text, descriptive elements, and subtle borders |
| Soft Gray | #898989 | neutral | Tertiary text for helper information or less emphasized content |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Founders Grotesk | Inter | 300, 500, 700 | 16px, 22px, 45px | 1.00, 1.40, 1.50 | Primary typeface for all headings and substantial body content. Its consistent weight spectrum across sizes supports structured visual hierarchy. |
| sans-serif | Arial | 400 | 16px, 24px | 1.20 | System font for links, occasional labels, and fallback text, ensuring broad compatibility and readability. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 16 | 1.4 |  |
| body-sm | 22 | 1.4 |  |
| body | 45 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "100px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Section Divider Thin

**Role:** Visual separator for content sections.

A 1px solid line using Graphite Black (#000000), spanning the full width of the content area.

### Project Card Outlined

**Role:** Container for individual project descriptions.

Content area with Charcoal Text (#272727) and a 1px solid border of Charcoal Text (#272727). No border-radius. Inner padding varies to accommodate content, with observed padding-left and padding-right of 46px, padding-bottom of 18px.

### Ghost Button (Link)

**Role:** Interactive text link with hover state emphasis.

Text in Charcoal Text (#272727) with a subtle bottom border in Fog Gray (#ebebeb) that clarifies interactivity without drawing excessive attention.

### Inline Badge

**Role:** Small, informational tags appearing within content.

Text in Charcoal Text (#272727) with no background or border, serving as a clean, integrated label.

### Header Navigation Link

**Role:** Primary navigation item.

Text in Charcoal Text (#272727), often accompanied by a bottom border of 1px in Charcoal Text (#272727) or Graphite Black (#000000) for active states or emphasis.

## Do's

- Use Canvas White (#ffffff) as the default page background.
- Apply Charcoal Text (#272727) for all primary headings and body text.
- Utilize 1px solid borders in Charcoal Text (#272727) or Graphite Black (#000000) for all content dividers and structural elements.
- Maintain a consistent 0px border-radius for all elements, prioritizing sharpness and a structured aesthetic.
- Employ Founders Grotesk for all primary textual content, leveraging its various weights for hierarchy.
- Ensure generous horizontal padding, with at least 46px on the left and right for main content blocks.
- Space elements using a base unit of 20px, specifically for `elementGap` between components.

## Don'ts

- Avoid using any chromatic colors; the system is strictly achromatic.
- Do not introduce rounded corners; all elements must maintain sharp, geometric edges.
- Refrain from using shadows or elevation effects; the design relies on flat surfaces and line dividers.
- Do not deviate from the specified font families or their letter-spacing values.
- Do not use background colors on buttons or badges; interactivity is indicated by borders and text color changes only.
- Avoid decorative imagery; content is communicated primarily through text and structured layout.
- Do not break the strict grid alignment; all elements should adhere to vertical and horizontal precision.

## Layout

The page primarily uses a max-width contained layout, though specific section width is not explicitly fixed, it suggests a contained model. The hero section displays the name 'Julien Renau' as a large, centered text block. The section rhythm is consistent, separated by thin horizontal lines. Content is frequently presented in a stacked, centered fashion, or in two-column layouts featuring text-heavy blocks. There's a strong vertical alignment with minimal white space between dense content sections, emphasizing information density. Navigation is implied through discreet text links and likely a sticky top bar or simplified menu, not fully visible but implied by the content flow.

## Imagery

The site uses no explicit decorative imagery or photography. The visual language is entirely functional, relying on plain text, lines, and subtle achromatic fills. Icons, when present, are minimalistic and line-drawn, without color. The overall impression is text-dominant and stark, focusing purely on content and structure.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Monochromatic palette, strict grid layout, and emphasis on content with minimal visual adornment. |
| Linear | Achromatic UI with sharp edges, high information density, and functional typography. |
| Stripe (early UI) | Focus on clean lines, lack of ornamentation, and a functional, monochrome design. |
| Read.cv | Minimalist design, strong typography, and a grid-like structure for presenting information. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #272727
- background: #ffffff
- border: #272727
- accent: no distinct accent color
- primary action: no distinct CTA color

Example Component Prompts:
- Create a section divider: 1px solid #000000, full-width.
- Create a project card: 1px solid #272727 border, 0px radius, with inside content text in #272727, padding-left and padding-right 46px, padding-bottom 18px.
- Create a Ghost Button for navigation: text 'Home' in #272727, sans-serif font weight 400, with a 1px bottom border in #ebebeb.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521121061-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521121061-thumb.jpg |
