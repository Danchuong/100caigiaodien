# Ezekiel Aquino — Refero Style

- Refero URL: https://styles.refero.design/style/d6be921b-d52d-4cc0-b527-431685a0bf50
- Site URL: https://ezekielaquino.com
- ID: d6be921b-d52d-4cc0-b527-431685a0bf50
- Theme: light
- Industry: design
- Created: 2026-04-30T03:59:38.035Z
- Ranks: newest: 10, popular: 708, trending: 534

> Monochromatic Score Sheet — text as structure, notation as art, on a silent white canvas.

## Description

Ezekiel Aquino's design system evokes an academic, minimalist aesthetic, reminiscent of a printed score on paper. The core visual identity is built on high-contrast monochrome with extensive negative space, making typography the primary visual element. The interplay of classic serif and modern sans-serif fonts, coupled with an almost entirely achromatic palette, creates a refined and intellectual atmosphere. Visual interest is primarily driven by artful arrangement of text and the graphic use of musical notation, rather than decorative UI elements or vibrant color.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Note Black | #000000 | neutral | Primary text for headings and body, accent for structural borders in the generative graphic. The stark black creates a formal contrast against the light background |
| Canvas White | #f4f4f4 | neutral | Dominant background color for the overall page, providing a clean, expansive, and subtle off-white paper-like base |
| Ghost White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Basel Grotesk | Inter | 400 | 10px, 32px | 1.00 | Body text for descriptions and navigation. Its clean, contemporary lines ground the system with a subtle technical feel. Used widely for general interface elements. |
| Neue Haas Unica W01 Regular | Helvetica Neue | 400 | 32px | 1.00 | Primary headings and artistic titles requiring a modern, clean, and understated presence. Shares the same size as the italicized serif for visual harmony. |
| Ogg Regular Italic | Playfair Display Italic | 400 | 32px | 0.92 | Italicized heading for key artistic statements, offering an elegant, classical touch. The tight line height hints at a carefully crafted composition. |
| Arial | Arial | 400 | 13px | 1.20 | Small functional text, potentially for discreet UI elements or copyright notices. Its commonality provides a neutral, almost invisible anchor. |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "0px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Navigation Button

**Role:** Primary interactive element for navigation. It's a visually subtle, text-only button with no background or border, relying on text color for subtle visibility.

Text color: #ffffff, Background: rgba(0, 0, 0, 0), Border: none, Padding: 0px, Border Radius: 0px.

## Do's

- Prioritize a monochrome palette using Note Black (#000000) for primary text and Canvas White (#f4f4f4) for backgrounds.
- Use Ghost White (#ffffff) for subtle interactive text elements.
- Employ Basel Grotesk for most functional text and Neue Haas Unica W01 Regular for main headings, maintaining a consistent 32px size for prominent titles.
- Introduce Ogg Regular Italic specifically for artistic or 'presents' statements, emphasizing its elegant italicized form with a tight 0.92 line height.
- Maintain a sense of generous negative space; do not crowd elements.
- Apply hard-edged, 0px border radius for all interactive elements and containers.
- Ensure all interactive buttons are styled as ghost buttons with no background or border, using Ghost White (#ffffff) for text against the Canvas White background for a minimalist interaction point.

## Don'ts

- Avoid the use of any bright or saturated colors; the system is strictly achromatic.
- Do not add shadows, gradients, or heavy borders to any UI elements.
- Refrain from using varied padding or rounded corners on buttons or cards; maintain a crisp, flat aesthetic.
- Do not introduce decorative elements that distract from the typography or the central generative graphic.
- Do not use generic system fonts for prominent headings or artistic text; rely on the specific font choices (Basel Grotesk, Neue Haas Unica, Ogg Italic) to convey brand identity.
- Avoid dense UIs; prioritize clear separation and ample whitespace between content blocks.
- Do not use a default button style with a solid background; all interactive elements should appear as text links.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Monochrome palette, focus on content as visual, minimal UI chrome. |
| The Browser Company (Arc) | Emphasis on typographic hierarchy and sparse, almost ghost-like UI elements against a clean background. |
| Brutalist Websites | High contrast, minimal color, unconventional layout choices, and a strong focus on raw presentation over polished aesthetic. |
| Erik Spiekermann's personal site | Strong typographic identity, black-and-white, academic and direct. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #f4f4f4
border: #000000
accent: #000000
primary action: no distinct CTA color

Example Component Prompts:
1. Create a primary page heading section using 'Neue Haas Unica W01 Regular' at 32px and '#000000' text color, with one line italicized using 'Ogg Regular Italic' at 32px and '#000000' text color, lh 0.92, all left-aligned.
2. Design a subtle navigation link using 'Basel Grotesk' at 10px, '#ffffff' text color, and 0px border-radius, positioned in the bottom-left corner of the viewport.
3. Create a copyright notice using 'Arial' at 13px, '#000000' text color, centered at the bottom of the page.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521563605-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521563605-thumb.jpg |
