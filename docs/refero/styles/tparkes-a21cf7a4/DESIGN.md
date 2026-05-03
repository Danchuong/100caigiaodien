# Tparkes — Refero Style

- Refero URL: https://styles.refero.design/style/a21cf7a4-80e0-4f4a-9297-823a5180c2d3
- Site URL: https://www.tparkes.com
- ID: a21cf7a4-80e0-4f4a-9297-823a5180c2d3
- Theme: light
- Industry: design
- Created: 2026-04-30T03:29:22.222Z
- Ranks: newest: 139, popular: 1083, trending: 1031

> High-contrast digital canvas.

## Description

Tparkes employs a stark, high-contrast digital canvas aesthetic. Typography, driven by a custom sans-serif, plays a central role, using a deliberate interplay of heavy weights and large sizes for impact, balanced by subdued text colors. Surfaces remain monochromatic, relying on deep gray and pure white for definition. The overall impression is one of directness and clarity, with UI details kept minimal to let content speak.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces |
| Carbon Text | #333333 | neutral | Primary text across all surfaces |
| Smoke Gray | #b3b3b3 | neutral | Muted text, subheadings, and secondary information |
| Midnight Black | #000000 | neutral | Prominent text, navigation links, and strong borders |
| Mist Border | #d6d6d6 | neutral | Subtle hairline borders and dividers |
| Silver Link | #808080 | neutral | Medium-contrast borders, control outlines, and structural separators. Do not promote it to the primary CTA color |
| Accent Yellow | #f5ffbe | accent | Highlighting card backgrounds — a soft, almost pastel tint providing a subtle content break |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Instrumentsans | Montserrat, Inter | 600, 700 | 10px, 17px, 22px, 24px, 86px | 0.83, 0.95, 1.09, 1.18, 1.20, 1.80 | Primary display font for headings, navigation, and prominent text. Its bold weights at large sizes grab attention without being overly decorative, maintaining a strong, direct presence. |
| Arial | Helvetica Neue, sans-serif | 400 | 14px | 1.43 | Body text and supporting information. It provides a highly readable and neutral counterpoint to the primary display font, ensuring legibility for longer content blocks. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 12 | -0.35 |
| body-sm | 14 | 20 | -2.996 |
| body | 17 | 20 | -0.595 |
| subheading | 22 | 26 | -0.77 |
| heading | 24 | 28 | -0.84 |
| display | 86 | 103 | -3.01 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "icons": "8px",
    "images": "16px",
    "buttons": "8px"
  },
  "elementGap": "20px",
  "sectionGap": "120px",
  "cardPadding": "10px",
  "pageMaxWidth": null
}
```

## Components

### Text Accent Card

**Role:** Highlights specific content blocks or portfolio entries.

Background is Accent Yellow (#f5ffbe), border-radius 12px. Padding 10px on all sides. Content inside uses primary text colors.

### Header Navigation Link

**Role:** Primary navigation elements in the page header.

Text uses Midnight Black (#000000) with Instrumentsans font, size 17px, weight 600, letter-spacing -0.0350em. No explicit background or border, appears as plain text link.

### Ghost Action Link

**Role:** Interactive elements, typically for navigation or calls to explore.

Text is Silver Link (#808080) with Arial font, size 14px, weight 400. Has an implicit 1px silver border on interaction or focus, but appears as text-only by default.

### Profile Avatar

**Role:** User or brand identifier.

Circular image with a 16px border-radius, contained within an 8px radius container. May have a subtle 1px solid Mist Border (#d6d6d6).

### Project Preview Image

**Role:** Visual representation of projects or work.

Images primarily with 16px border-radius, occasionally 8px. Often presented without explicit borders to form a clean, contained block.

## Do's

- Use Instrumentsans ExtraBold (weight 700) for all main headings and prominent texts to convey directness.
- Maintain a clear distinction between Carbon Text (#333333) for primary content and Smoke Gray (#b3b3b3) for secondary or muted descriptions.
- Apply 12px border-radius consistently to all card-like containers, and 16px to larger image blocks.
- Ensure section gaps are consistently 120px to create ample visual breathing room between content blocks.
- Utilize Canvas White (#ffffff) as the dominant background color to maintain a bright, high-contrast appearance.
- Implement Accent Yellow (#f5ffbe) sparingly and only for card backgrounds where a distinct, soft highlight is needed.
- Use 1px solid Mist Border (#d6d6d6) for subtle dividers or outlines, avoiding heavy strokes.

## Don'ts

- Do not introduce additional background colors; maintain the primary Canvas White and occasional Accent Yellow for cards.
- Avoid using multiple font sizes for body text; stick to the defined Arial 14px for consistency.
- Do not use letter-spacing values other than the specified -0.0350em for Instrumentsans and -0.2140em for Arial.
- Do not apply shadows or complex elevation to elements; surfaces are largely flat.
- Do not use saturated or bright accent colors beyond the subtle Accent Yellow; maintain a monochrome primary palette.
- Avoid decorative gradients; surfaces should be solid colors.
- Do not deviate from the established radius values: 12px for cards, 16px for images, 8px for smaller interactive elements.

## Layout

The page primarily uses a full-bleed layout, where content sections often span the full width of the viewport. The hero section features a large, centered text block. Subsequent sections typically alternate between full-width visuals (like product screenshots) and text-dominant areas. Content within these full-width sections is not strictly constrained by a max-width, maintaining a spacious, open feel. Vertical rhythm is governed by a consistent 120px section gap, creating strong visual separation. Navigation is a simple top-right bar with minimal text links. A multi-column grid is used for displaying case studies or visual feeds, suggesting modular content blocks. The overall density is comfortable, with generous white space around elements.

## Imagery

This system features a mix of high-fidelity product screenshots, abstract geometric illustrations, and occasional outlined icons. Product screenshots are typically dark-themed, providing a stark contrast against the light UI, often full-width or large blocks, and are precisely cropped with rounded 16px corners to eliminate any extraneous context. Illustrations are flat, geometric, and monochrome, often using a distinct single brand color or dark gray on a white background, serving as decorative accents or visual metaphors. Icons are outlined, with a moderate stroke weight, and monochromatic – predominantly black or gray. Imagery serves both as decorative atmosphere and direct product showcases, maintaining a balance between aesthetic appeal and informational density.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Clean, predominantly light UI with strong typography as a core visual element, and minimal, functional use of color. |
| Read.cv | Emphasis on typographic hierarchy and a limited, high-contrast color palette for personal portfolio presentation. |
| Linear | Sharp, clean aesthetic with a focus on dark mode product screenshots contrasted against a lighter overall UI, and efficient use of space. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #333333
- background: #ffffff
- border: #d6d6d6
- accent: #f5ffbe
- primary action: no distinct CTA color

Example Component Prompts:
1. Create a hero section: Canvas White background. Headline 'I'm Tom Parkes, a digital design lead' using Instrumentsans 86px, weight 700, Carbon Text (#333333), letter-spacing -3.01px.
2. Create a Text Accent Card: Accent Yellow (#f5ffbe) background, 12px border-radius, 10px padding. Inside, place a heading 'My Visual Feed' using Instrumentsans 24px, weight 700, Carbon Text (#333333).
3. Create a Ghost Action Link: 'Explore my work' using Arial 14px, weight 400, Silver Link (#808080), letter-spacing -2.996px. No background, no visible border by default.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519745456-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519745456-thumb.jpg |
