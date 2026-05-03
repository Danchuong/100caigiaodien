# Myrch Club — Refero Style

- Refero URL: https://styles.refero.design/style/528683fb-6b17-4fc6-b37e-d831ee1b20e2
- Site URL: https://www.myrch.club
- ID: 528683fb-6b17-4fc6-b37e-d831ee1b20e2
- Theme: light
- Industry: other
- Created: 2026-04-30T03:20:21.933Z
- Ranks: newest: 176, popular: 1215, trending: 1217

> Archival white space

## Description

Myrch Club employs a stark, archival aesthetic, where content is displayed on clean white or near-white surfaces, punctuated by crisp black typography. A single vibrant red is used sparingly as a striking, almost disruptive brand accent. The system favors spacious layouts, minimal ornamentation, and clear visual separation of elements, evoking a catalog or museum exhibition feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated surfaces, button text on filled buttons |
| Pale Gray Surface | #f9f9f9 | neutral | Card backgrounds, secondary container surfaces |
| Text Black | #000000 | neutral | Primary text, strong headings, default body copy |
| Ink Detail | #111111 | neutral | Primary action button backgrounds, default button borders, darker text details |
| Muted Gray Text | #cfcfcf | neutral | Muted body text, secondary information, decorative borders |
| Dark Gray Text | #888888 | neutral | Subtle body text, tertiary information |
| Archive Red | #ff0000 | brand | Red decorative accent for icons, marks, and small graphic details. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times | Times New Roman | 400 | 16px | 1.20 | Fallback font for general text, links, and minor UI elements. Provides a classic, almost report-like baseline. |
| Arial Narrow |  | 400 | 14px, 20px, 42px | 1.24, 1.33, 1.40, 1.43 | The primary font for headings, body text, and interactive elements. Its condensed structure and consistent weight support the efficient, archival feel of the site. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.43 |  |
| body | 16 | 1.2 |  |
| subheading | 20 | 1.4 |  |
| heading | 42 | 1.33 |  |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "23px",
    "cards": "10px",
    "buttons": "10px"
  },
  "elementGap": "20px",
  "sectionGap": "40px",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Button

**Role:** Ghost interactive element

Text in Ink Detail (#111111), background transparent, 1px Ink Detail (#111111) border on hover/active. Radius: 10px. Padding 6px vertical, 12px horizontal. Font: Arial Narrow, weight 400.

### Active Navigation Button

**Role:** Filled interactive element

Background Ink Detail (#111111), text Canvas White (#ffffff). Radius: 10px. Padding 6px vertical, 12px horizontal. Font: Arial Narrow, weight 400.

### Product Card

**Role:** Display individual merchandise items

Background Pale Gray Surface (#f9f9f9), no shadow. Radius: 10px. Padding 30px on all sides.

### Minimal Badge

**Role:** Informational label

Text Ink Detail (#111111), background transparent, no border. Radius: 0px. No padding.

## Do's

- Prioritize Canvas White (#ffffff) as the dominant background color for most page content, ensuring ample negative space.
- Use Text Black (#000000) for primary textual content and Ink Detail (#111111) for interactive elements and stronger outlines.
- Maintain a clear visual hierarchy with Arial Narrow as the primary display and body font, reserving Times for secondary roles.
- Apply 10px border-radius consistently to all interactive components like buttons and cards for a softened but contained feel.
- Utilize Archive Red (#ff0000) strictly as a decorative brand accent, primarily in large-scale graphical elements or SVGs, avoiding its use for interactive states or general UI.
- Implement a spacious layout rhythm, maintaining at least 20px gap between elements and 30px padding within cards.
- Employ the light shadow rgba(17, 17, 17, 0.3) 0px 0px 20px 0px sparingly, specifically for prominent, interactive elements as a subtle elevation cue.

## Don'ts

- Do not use Archive Red (#ff0000) for interactive elements like buttons, links, or alerts; it is a decorative brand element only.
- Avoid introducing additional chromatic colors; the system is designed around a monochrome base with one vivid red accent.
- Do not vary the border-radius from 10px for standard UI components like buttons and cards, unless for specific, deliberate exceptions like the 23px radius noted for distinct elements.
- Refrain from using bold typefaces or excessively large font sizes for body text, maintaining an understated and efficient textual presentation.
- Do not clutter page sections; adhere to the spacious density by using 40px section gaps and 20px element gaps.
- Avoid heavy drop shadows or vibrant background gradients; the visual identity relies on flatness and subtle elevation.

## Layout

The page operates on a contained max-width model, with content centered on a dominant Canvas White (#ffffff) background. The hero section features a large, decorative Archive Red (#ff0000) graphic or wordmark, with core text overlaid, establishing the brand's graphic identity immediately. Content sections below are primarily grids of Product Cards on a Pale Gray Surface (#f9f9f9) or Canvas White (#ffffff), maintaining consistent 30px padding and 20px element gaps. The overall rhythm is spacious and orderly, prioritizing clear visual separation and uncrowded presentation of items, reminiscent of a gallery or archive display.

## Imagery

The site's imagery primarily consists of high-quality product photography: items isolated on pure white backgrounds, often centered, treated with soft, even lighting to showcase detail. There's an absence of lifestyle photography or complex compositions. Icons are minimal, mostly text-based (All caps, no fill, 1px stroke for 'All' or 'Other' text). The visual emphasis is on the object itself, presented in a clean, catalog-like manner, without extraneous decorative elements or busy backdrops.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Monochrome palette with a focus on content, clean white surfaces, and precise typography for an archival, collected feel. |
| Superscript | Minimalistic layout, sharp black-and-white aesthetic, and subtle use of color as a disruptive brand element. |
| The Brand Identity | Clean layouts, strong typography, and a catalog-like presentation of design work with minimal UI chrome. |
| Vessel Gallery | White gallery-like presentation of objects, spacious layouts, and a subdued color palette to highlight item details. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #111111
accent: #ff0000
primary action: #111111 (filled action)

Example Component Prompts:
1. Create a primary filled button: background #111111, text #ffffff, 10px border-radius, font Arial Narrow weight 400, 6px vertical and 12px horizontal padding.
2. Create a ghost button for navigation: text #111111, transparent background, 10px border-radius, font Arial Narrow weight 400, 6px vertical and 12px horizontal padding, with a 1px #111111 border on hover.
3. Design a product card: background #f9f9f9, 10px border-radius, 30px all-around padding. Inside, use a centered image and body text #000000 with Arial Narrow font, 16px size and 1.2 line-height.
4. Layout a section with a grid of 3 product cards: background #f9f9f9 for cards, surrounding canvas #ffffff, 20px gap between cards, and 40px section gap above and below the grid.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519206390-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519206390-thumb.jpg |
