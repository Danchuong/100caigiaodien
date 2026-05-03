# Vita Architecture — Refero Style

- Refero URL: https://styles.refero.design/style/b406cea1-2f4f-4495-95f1-29868522e648
- Site URL: https://vitaarchitecture.com
- ID: b406cea1-2f4f-4495-95f1-29868522e648
- Theme: light
- Industry: agency
- Created: 2026-04-30T03:48:05.090Z
- Ranks: newest: 62, popular: 1144, trending: 1124

> blueprint on vellum

## Description

Vita Architecture presents a restrained, high-contrast aesthetic favoring stark monochrome with precise typographic forms. Headlines use a unique custom serif, creating an impression of classic elegance, while body text uses a clean sans-serif for legibility. The primary identity relies on black borders and text against various shades of white and very light gray, punctuated subtly by a single vivid violet for select decorative elements. The overall feel is one of considered simplicity and architectural clarity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink | #000000 | neutral | Primary text, borders, decorative strokes, navigation elements — establishes crisp definition against light backgrounds |
| Canvas | #fafafa | neutral | Page background, main content surfaces — provides a bright, unobtrusive foundation |
| Light Linen | #eeeeee | neutral | Alternative background for sections, subtle dividers — offers visual separation without strong contrast, used for buttons |
| Horizon Violet | #5e8cff | accent | Violet outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial |  | 400 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |
| Hatton | Playfair Display | 400 | 48px, 55px, 125px | 1.20 | Display and primary headings — a distinctive serif that conveys classic elegance and architectural gravitas through its high contrast and unique letterforms. Its subtle negative tracking adds to its sophisticated presence. |
| CircularStd | Plus Jakarta Sans | 400, 700 | 16px, 20px, 24px, 32px | 1.00, 1.18, 1.20, 1.40, 2.79 | Body text, navigation, and secondary headings — a highly legible sans-serif that balances the classic feel of Hatton with modern clarity. Its precise, slightly condensed tracking contributes to a refined, professional output. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.4 | -0.16 |
| subheading | 20 | 1.2 | -0.14 |
| heading-sm | 24 | 1.18 | -0.12 |
| heading | 32 | 1 | -0.32 |
| display-sm | 48 | 1.2 | -0.14 |
| display | 55 | 1.32 | -0.16 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "15px",
  "sectionGap": "140px",
  "cardPadding": "23px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button

**Role:** Primary Call to Action

Text-only button with Ink (#000000) color, no background, and 0px border-radius. Padding is 0px for all sides. Used for internal navigation and primary actions that require minimal visual weight.

### Subtle Background Button

**Role:** Secondary Action

Button with Light Linen (#eeeeee) background and Ink (#000000) text, 0px border-radius. Padding of 1px vertical and 6px horizontal. Used for less prominent actions, such as navigation for carousels.

### Navigation Link

**Role:** Navigation Item

Ink (#000000) text with 0px padding and 0px border-radius. Uses CircularStd font at various sizes with subtle negative letter-spacing.

## Do's

- Prioritize Ink (#000000) for all functional text and borders to maintain high contrast and definition.
- Use Hatton Regular for display and main headings, varying sizes according to the type scale from 48px to 125px with letter-spacing ranging -0.003em to -0.001em.
- Apply CircularStd for all body text, navigation, and secondary headings, ensuring precise letter-spacing between -0.010em and -0.005em.
- Maintain hard edges and sharp corners by consistently using a 0px border-radius for all interactive elements and containers.
- Leverage Light Linen (#eeeeee) on Canvas (#fafafa) as a subtle background shift for sections or secondary interactive elements like buttons.
- Use Horizon Violet (#5e8cff) sparingly as a decorative and highlighting accent on select heading elements only.

## Don'ts

- Do not introduce additional saturated colors beyond Horizon Violet (#5e8cff); maintain a monochrome base for all UI.
- Avoid using drop shadows or complex elevation; the design relies on flat surfaces and high contrast for definition.
- Do not deviate from the specified light letter-spacing for CircularStd and Hatton; precise tracking is fundamental to the typographic identity.
- Do not add rounded corners to any UI elements; the geometric precision of 0px radius is a core tenet.
- Refrain from using heavily decorative background patterns or aggressive visual noise; the system emphasizes clarity and minimalist composition.
- Do not use Horizon Violet (#5e8cff) as a primary action background or border; its role is decorative accent on text.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | High-contrast monochrome UI with minimal use of color for functional accents. |
| Stripe (early versions) | Emphasis on elegant typography, clean lines, and a spacious layout over heavy graphical elements. |
| Apple (product pages) | Focus on product details and clarity through high-quality visual elements on a stark, minimalist background. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fafafa
border: #000000
accent: #5e8cff
primary action: no distinct CTA color

3-5 Example Component Prompts:
Create a primary headline using Hatton font, size 55px, weight 400, color #000000, letter-spacing -0.16px, line-height 1.32. Apply an accent to specific words within the headline with Horizon Violet (#5e8cff).
Create a navigation item: CircularStd font, size 16px, weight 400, color #000000, letter-spacing -0.16px, no background, 0px border-radius, 0px padding. Place with a 35px margin-right.
Design a textual body paragraph: CircularStd font, size 16px, weight 400, color #000000, letter-spacing -0.16px, line-height 1.4. Apply a section top padding of 140px.
Create a subtle background button: CircularStd font, size 16px, weight 400, color #000000, letter-spacing -0.16px. Background color #eeeeee, 0px border-radius, 1px vertical padding, 6px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520867260-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520867260-thumb.jpg |
