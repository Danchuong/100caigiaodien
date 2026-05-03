# Dries Bos — Refero Style

- Refero URL: https://styles.refero.design/style/6d0db1c7-5500-40cd-b2f3-d3d9abbd3a2f
- Site URL: https://www.driesbos.com
- ID: 6d0db1c7-5500-40cd-b2f3-d3d9abbd3a2f
- Theme: light
- Industry: other
- Created: 2026-04-30T03:30:23.375Z
- Ranks: newest: 135, popular: 315, trending: 187

> Wireframe on parchment

## Description

Dries Bos presents a 'digital architect' aesthetic, combining a minimalist, achromatic canvas with precise, almost wireframe-like detailing. The system maintains a low-contrast, muted palette, focusing on structure through fine lines and ample negative space. Typography is compact and precise, anchoring content within a strict grid, while interactive elements are subtly delineated, relying on hover states to reveal activity rather than bold colors or heavy fills. The overall impression is one of meticulous order and understated functionality.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Parchment | #e8e7e3 | neutral | Primary page and card backgrounds, providing a soft, desaturated base |
| Ink Jot | #050200 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Ash Outline | #747472 | neutral | Muted text, secondary borders, and icon strokes. Used for ghost button borders and placeholder text, offering reduced visual weight |
| Pure Black | #000000 | neutral | Decorative icon fills, high-contrast text on specific elements, offering maximum visual impact for small details |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Sohne Buch | Inter, Public Sans | 400 | 20px | 1.45 | All primary body text, links, and button labels. Its clean, sans-serif form maintains readability and directness within the structured layout. This custom font's subtle character aids in brand recognition; 'Inter' or 'Public Sans' could serve as substitutes for similar neutrality. |
| myFont | JetBrains Mono, IBM Plex Mono | 400 | 20px | 1.00 | Used for table headers and specific input fields, characterized by its strict single-line height, contributing to the system's rigid, tabular feel. A monospace font like 'JetBrains Mono' or 'IBM Plex Mono' could provide a similar aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 20 | 1.45 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "1000px",
    "cards": "0px",
    "buttons": "0px"
  },
  "elementGap": "10px",
  "sectionGap": "79px",
  "cardPadding": "25px",
  "pageMaxWidth": "1150px"
}
```

## Components

### Naked Table Row Button

**Role:** Interactive row element within lists and tables, serving as a primary navigation trigger.

Transparent background, 'Ink Jot' text, 'Ink Jot' top border. Padding 25px horizontal and vertical. No border radius. Hover state makes the top border 'Ash Outline'.

### Outlined Category Tag

**Role:** Small, informational tags for categorization or status.

Transparent background, 'Ink Jot' text, 'Ink Jot' border. Padding 15px horizontal, 10px vertical. No border radius. This style appears on table headers.

### Subtle Pill Tag

**Role:** Discrete labels for content details, like 'startup' or 'mobile'.

Canvas Parchment background, 'Ink Jot' text. Padding 15px horizontal, 9px bottom, 10px top. 1000px (fully rounded) border radius. Primarily seen on individual content badges.

### Underlined Input Field

**Role:** Text input areas with a subtle bottom border.

Transparent background, 'Ink Jot' text, 'Ink Jot' bottom border 2px thick. No padding. Only the bottom border indicates an input area.

## Do's

- Prioritize 'Canvas Parchment' (#e8e7e3) for all significant background surfaces to maintain a consistent light theme.
- Use 'Ink Jot' (#050200) for all primary text, borders, and interactive element outlines.
- Apply a 0px border-radius consistently to all card-like containers, buttons, and input fields to maintain a sharp, angular aesthetic.
- Employ a strict 25px padding horizontally and vertically for most interactive block elements like table rows and list items.
- Maintain a spacious rhythm with section gaps of 79px to delineate major content blocks.
- Use 'Ash Outline' (#747472) for secondary text, placeholder elements, and subtle icon strokes where a slightly less dominant presence is desired.
- Leverage the 'myFont' for tabular headings or specific data points where precise, compact text is required, otherwise default to 'Sohne Buch'.

## Don'ts

- Avoid using bold or highly chromatic accent colors; the system relies on a strictly achromatic palette.
- Do not use explicit box-shadows or heavy elevation; surfaces should appear flat and delineated by borders.
- Do not introduce rounded corners on primary UI elements such as buttons, cards, or inputs, as this contradicts the system's sharp geometry.
- Do not deviate from the defined primary typography; avoid using system fonts or other sans-serifs that might break the visual consistency of 'Sohne Buch'.
- Refrain from complex background gradients or imagery; the design relies on solid, monochromatic surfaces.
- Do not vary line-height significantly for 'Sohne Buch' text; maintain 1.45 to ensure a consistent reading rhythm.
- Do not use letter-spacing other than normal, as it could disrupt the precise textual alignment established by the custom fonts.

## Layout

The page adheres to a maximal width of 1150px, with content centered. The hero section features a unique, abstract window-frame graphic in 'Ink Jot' line art, with primary information presented as a compact text block. Below the hero, content is structured as a series of vertically stacked, full-width sections. Information is often presented in a list or table-like format, using thin 'Ink Jot' horizontal dividers that create a clear, rigid grid. The visual rhythm is largely consistent, with the 'sectionGap' of 79px providing generous, uniform spacing between logical content groups.

## Imagery

The site employs a primarily icon-based visual language, alongside abstract line art for decorative elements. Icons are either 'Ink Jot' (#050200) or 'Pure Black', typically filled or outlined with a fine stroke, often acting as functional pointers or status indicators (e.g., arrows, external link icons, search icon). Abstract graphics, like the illustrative window frame, are minimal, line-based, and monochromatic, serving as subtle atmospheric cues rather than prominent content. There is a strong absence of photography, colorful illustrations, or product screenshots, underscoring the site's focus on pure UI and information.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Utilizes a highly structured, flat UI with sharp edges, a meticulous grid, and a dark-on-light (or light-on-dark) achromatic palette with minimal color accents. |
| Stripe | Employs clean, functional typography, a spacious layout, and a focus on precise geometric elements rather than decorative flair, particularly in its business tools UI. |
| Read.cv | Minimalist design often featuring a stark, monochromatic interface, clean lines, and a heavy reliance on typography and ample negative space to convey information hierarchy. |
| Cultured Code (Things app) | Desktop applications with a focus on structured lists, clear divisions, and a restrained, functional aesthetic that prioritizes content and usability over visual flourish. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #050200
background: #e8e7e3
border: #050200
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a table header row: 'Canvas Parchment' background, 'myFont' 20px text in 'Ink Jot', 0px radius. Use 25px horizontal padding and 10px top/9px bottom padding for the cells. Thin 1px 'Ink Jot' bottom border.
2. Design a primary navigational link: 'Sohne Buch' 20px text in 'Ink Jot'. No background, 0px radius. On hover, apply an 'Ash Outline' (#747472) bottom border (underlined state).
3. Generate an input field with a label 'Your Name': Label in 'Sohne Buch' 20px 'Ink Jot' text. Input field should have a transparent background, 'Ink Jot' text, and a 2px 'Ink Jot' bottom border, no explicit padding, 0px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519808895-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519808895-thumb.jpg |
