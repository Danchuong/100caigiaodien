# Luis Bizarro — Refero Style

- Refero URL: https://styles.refero.design/style/c23be526-89e8-468f-ba35-9ab647908325
- Site URL: https://bizar.ro
- ID: c23be526-89e8-468f-ba35-9ab647908325
- Theme: dark
- Industry: design
- Created: 2026-04-30T02:49:36.492Z
- Ranks: newest: 285, popular: 971, trending: 844

> monochrome digital ledger

## Description

Luis Bizarro's portfolio establishes itself as a minimalist, high-contrast dark canvas, where sparse white typography takes center stage. A grid-based layout with generous vertical spacing emphasizes content partitions. The visual style is stark and intentional, using only black and white to create a focused, almost archival presentation of work, with interactivity implied through subtle hover states rather than overt color cues.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Void Black | #000000 | neutral | Page background, surface backgrounds, dominant UI color |
| Ghost White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| FK Grotesk Neue | Inter, sans-serif | 400 | 8px, 14px, 18px, 30px, 32px, 38px, 45px, 60px, 75px | 1.00, 1.20 | All textual content, from small metadata to large hero headlines. The consistent weight but varied tracking creates hierarchical distinction. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 14 | 1.2 | -0.7 |
| body | 18 | 1.2 | -0.76 |
| heading-sm | 30 | 1.2 | -0.93 |
| heading | 32 | 1.2 | -0.8 |
| heading-lg | 38 | 1.2 | -0.79 |
| display | 45 | 1.2 | -1.04 |
| display-lg | 60 | 1 | -1.5 |
| display-xl | 75 | 1 | -1.58 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "5px"
  },
  "elementGap": "19px",
  "sectionGap": "45px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Primary navigation and interactive text links

Ghost White text set in FK Grotesk Neue at 19px, line height 1.2, with a subtly reduced letter spacing. Employs a 1px Ghost White border on hover.

### Project Overview Card (Interactive)

**Role:** Container for individual project entries, signaling interactivity

A block of Void Black background with Ghost White text and details. The entire block is bordered by a 1px Ghost White line, serving as the interactive element boundary. Features 19px internal element spacing and rounded corners at 5px.

### Subtle Metadata Tag

**Role:** Small, functional information labels

Ghost White text in FK Grotesk Neue, typically 8px, with specific letter spacing of -0.0620em. Used for secondary information like 'Building Hypercube' or 'Apple'.

### Large Numeric Display

**Role:** Prominent, data-driven typographic element

Ghost White numbers (e.g., '95', '25') set in FK Grotesk Neue, size 60px or 75px, with tight line height 1.0. Creates a bold, almost code-like aesthetic.

### Section Header (Stacked)

**Role:** Divisive title for portfolio projects

Multiple lines of Ghost White text, uppercase, usually 38px or 45px FK Grotesk Neue, 1.2 line height, stacked vertically with some letter spacing adjustments (-0.024em or -0.021em). Examples: 'APPLE VISION PRO', 'XBOX MUSEUM'.

## Do's

- Maintain maximum contrast: use only Ghost White (#ffffff) text and borders on Void Black (#000000) backgrounds.
- Utilize FK Grotesk Neue weight 400 for all typography, varying sizes and letter spacing to establish hierarchy.
- Apply a global border-radius of 5px to all rectangular interactive elements and containers.
- Implement a 1px Ghost White (#ffffff) border for interactive elements to indicate their clickable nature, particularly for project cards and navigation.
- Employ consistent vertical spacing for sections, preferentially using `sectionGap` of 45px and `elementGap` of 19px within containers.
- Use tight line heights (1.0 for large numbers, 1.2 for text blocks) to maintain typographic density and control vertical rhythm.

## Don'ts

- Avoid any color other than Ghost White for text, borders, or accents; the system is strictly monochrome.
- Do not introduce unnecessary shadows or complex elevation; surfaces should primarily be flat against the Void Black background.
- Do not vary font weights; FK Grotesk Neue weight 400 is the sole weight for all type.
- Do not use generic padding values; rely instead on `elementGap` for internal spacing and `sectionGap` for block separation.
- Avoid decorative line breaks or excessive horizontal rules; vertical spacing and subtle borders are the primary separators.
- Do not use imagery in a way that breaks the strict monochrome palette or introduces significant color; if imagery is present, it should be abstract or minimal.

## Layout

The page follows a full-bleed, dark-themed model with no explicit page max-width, allowing content to stretch across the viewport, though text blocks are inherently contained. The hero section features large, centered typography flanked by smaller, aligned metadata. Subsequent sections predominantly use a high-contrast text-on-black layout, often featuring vertically stacked, large-format project titles. Vertical rhythm is established through consistent `sectionGap` (45px) between content blocks and larger `marginTop` values (up to 220px) for prominent headings. Navigation is minimal, presented as Ghost White text links.

## Imagery

The site largely avoids traditional imagery, focusing instead on stark typography. When visuals are present, they are either abstract, pixelated, or technical renders (like the pixelated face or the Apple Vision Pro render), adhering to a muted, often monochromatic or desaturated color palette that blends with the dark UI. Icons are simple, outlined, and monochromatic (Ghost White). The overall density is image-light, with visuals serving as abstract texture rather than detailed content.

## Similar Brands

| Business | Why |
| --- | --- |
| Bruno Simon | Monochromatic interface with a strong focus on interactive text and minimal graphics on a dark background. |
| Obys Agency | High-contrast, text-heavy design on dark backgrounds, often utilizing large, spaced-out sans-serif typography for visual impact. |
| Garden of Delete | Experimental typography, stark black and white palette, and a focus on unique type treatments to form the primary visual identity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: #ffffff
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
Create a navigation link: Ghost White text '#ffffff', FK Grotesk Neue, 18px size, 1.2 line height, -0.76px letter spacing. On hover, add a 1px solid Ghost White border.
Create a project heading: Ghost White text '#ffffff', FK Grotesk Neue, 38px size, 1.2 line height, -0.79px letter spacing, uppercase. Center align.
Create a metadata label: Ghost White text '#ffffff', FK Grotesk Neue, 8px size, 1.0 line height, -0.49px letter spacing.
Create a project overview card: Void Black background '#000000', 5px border-radius, Ghost White 1px border '#ffffff'. Inside, stack project heading, metadata, and an interactive 'SEE' link with 19px vertical elementGap.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517356003-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517356003-thumb.jpg |
