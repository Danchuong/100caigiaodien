# Block — Refero Style

- Refero URL: https://styles.refero.design/style/c9ec904b-49c9-49f5-96e6-49bd818cd952
- Site URL: https://block.xyz
- ID: c9ec904b-49c9-49f5-96e6-49bd818cd952
- Theme: light
- Industry: fintech
- Created: 2026-04-30T02:26:19.153Z
- Ranks: newest: 371, popular: 1163, trending: 1150

> monochromatic minimalist canvas

## Description

Block's design system embodies unadorned clarity: a stark white canvas serves as the backdrop for precise, centered typography. The visual language centers on minimal distraction, prioritizing content with a clean, almost ascetic aesthetic. Interaction is subtle, with elements distinguished primarily through typography and placement rather than color or elaborate surfacing.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, surface base layer |
| Absolute Black | #000000 | neutral | Primary text, navigation links, icons, borders, and decorative elements. This single dark hue defines all foreground content against the white canvas |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Cash Sans | Inter | 400 | 12px, 16px, 30px | 1.20, 1.26, 1.40 | Primary brand typeface for all headings and UI elements. Its unique geometry contributes to the brand's distinctive, slightly technical yet approachable feel. The restrained weight maintains the system's lightweight visual character. |
| Times | Times New Roman | 400 | 16px | 1.20 | Limited use for body text, providing a classic counterpoint to the more contemporary Cash Sans. Its use appears highly curated. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.26 | 0.996 |
| body | 16 | 1.2 | 0.112 |
| heading | 30 | 1.4 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "30-35px",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Top and bottom navigation items.

Uses Cash Sans, size 12px for primary nav and 16px for footer sub-nav, weight 400, color Absolute Black (#000000). Padding is 17px horizontal for top nav items. No visible borders or backgrounds.

### Centred Brand Headline

**Role:** Central page headline for brand messaging.

Centered text using Cash Sans, size 30px, weight 400, color Absolute Black (#000000), line-height 1.4. This is a prominent focal point for key messages.

## Do's

- Use Canvas White (#ffffff) for all primary backgrounds and surfaces.
- Apply Absolute Black (#000000) for all text, icons, and borders.
- Prioritize Cash Sans for all headings and UI text content.
- Center-align primary headlines and section content where appropriate to reinforce the focused aesthetic.
- Maintain generous vertical spacing between sections, following the 215-675px range.
- Ensure navigation links use 17px horizontal padding with no background or border.
- Avoid any border-radius; elements should have sharp, rectangular edges.

## Don'ts

- Do not introduce any additional colors for UI elements; strictly adhere to the white and black palette.
- Avoid decorative gradients or shadows; the design relies on flatness and strong contrast.
- Do not use Times for prominent headings or UI elements; restrict its use to specific body text instances.
- Do not vary font weights; Cash Sans and Times should consistently use weight 400.
- Avoid dense, packed layouts; embrace generous negative space around elements.
- Do not use border-radius for any component; all corners should be 0px.

## Layout

The page maintains a full-bleed layout with a centered content approach rather than a fixed max-width container, especially for the main content areas. The hero features a large, centered headline accompanied by a simple icon, dominating the initial view. Sections are vertically distinct with significant spacing (215-675px), creating a calm rhythm. Content is primarily stacked and centered, with a clear hierarchy driven by font size and placement. Navigation is handled by a minimal top bar and a similar footer, both text-based and centered to the content axis.

## Imagery

This site uses no visible imagery on the main page. The visual system is purely typographic and layout-driven, relying on a content-first, minimalist approach that directs full attention to the text.

## Similar Brands

| Business | Why |
| --- | --- |
| Apple | Shares a monochromatic palette, extensive use of white space, and a focus on clean typography to convey premium simplicity. |
| Stripe | Employs a minimalist UI, strong typographic hierarchy, and a highly restrained color palette to emphasize clarity and content. |
| Linear | Known for its clean, efficient UI dominated by dark neutrals and sharp typography, similar to Block's precision-first approach. |
| Substack | Simple, text-focused design with stark black and white contrast and minimal UI chrome to prioritize content. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
Create a top navigation bar: Canvas White background, links in Cash Sans 12px, weight 400, Absolute Black (#000000) color, with 17px horizontal padding on each link.
Create a central brand statement: 'block builds technology for economic empowerment' using Cash Sans 30px, weight 400, line-height 1.4, Absolute Black (#000000) color, centered on the page.
Create a footer navigation: Cash Sans 16px, weight 400, Absolute Black (#000000) color, centered, with 35px horizontal spacing between items.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515965493-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515965493-thumb.jpg |
