# Nev Flynn — Refero Style

- Refero URL: https://styles.refero.design/style/712d5132-5784-4e43-bb8c-941daa362641
- Site URL: https://nevflynn.com
- ID: 712d5132-5784-4e43-bb8c-941daa362641
- Theme: light
- Industry: design
- Created: 2026-04-30T02:07:12.228Z
- Ranks: newest: 441, popular: 1272, trending: 1256

> Softly rounded digital canvas

## Description

Nev Flynn's design aesthetic is that of a playful digital canvas, characterized by soft, rounded cards floating on a clean, near-white background. Typography is primarily functional and understated, reserving boldness for key headings. Color is introduced sparingly, often as subtle accent panels or within images, creating a gentle visual energy rather than overt branding. The overall impression is approachable and organized, like a well-structured personal portfolio.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Bloom | #f7f2f2 | neutral | Page backgrounds, subtle card shadows |
| Surface White | #ffffff | neutral | Card backgrounds, general surface elements |
| Ink Black | #000000 | neutral | Primary text, strong borders, icons |
| Storm Gray | #0d1117 | neutral | Secondary text, input borders, nav links |
| Muted Sage | #8a949e | neutral | Muted helper text, tertiary body copy |
| Sky Card | #98d0ff | accent | Card background for visual distinction |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| -apple-system |  | 400 | 16px | 1.2 | -apple-system — detected in extracted data but not described by AI |
| Moranga Bold | Georgia | 400 | 24px, 40px | 1.00, 1.33 | 'Moranga Bold' carries signature headings, using a medium weight to emphasize content rather than shout. The letter spacing tightens as font size increases, enhancing its presence without feeling bulky. |
| Silka Medium | Inter | 400 | 14px | 1.20, 1.71 | Used for navigation and some body content, providing a clear, readable geometric sans-serif that balances modernism with legibility. Its normal weight feels light even for body copy. |
| Silka Regular | Inter | 400 | 15px, 16px | 1.20, 1.47, 1.73 | Predominant for body text and input fields, offering a highly readable, neutral baseline. The subtle letter spacing variation ensures optimal legibility across smaller text sizes. |
| Arial |  | 400 | 13px | 1.2 | Arial — detected in extracted data but not described by AI |
| Helvetica Neue |  | 400 | 12px | 1.67 | Helvetica Neue — detected in extracted data but not described by AI |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "32px",
    "buttons": "18px",
    "navItems": "18px",
    "roundElements": "50px"
  },
  "elementGap": "4px",
  "sectionGap": "40px",
  "cardPadding": "36-44px",
  "pageMaxWidth": null
}
```

## Components

### Pill Navigation Item

**Role:** Navigation links (e.g., 'All', 'About')

Ghost button style with 18px radius, no background, and 0px vertical / 12px horizontal padding. Text color is Storm Gray (#0d1117) unless active, then text color is Ink Black (#000000).

### Outlined Switch-like Button

**Role:** Toggle buttons (e.g., 'Toggle Lockdown')

Bordered button with 18px radius and a 2px Canvas Bloom (#f7f2f2) boxShadow inset, making it appear slightly recessed. Text is Ink Black (#000000) with Arial font. Padding is 0px vertical and 12px horizontal.

### Standard Content Card

**Role:** General information containers

Surface White (#ffffff) background with 32px border radius. Features a 2px inset border that appears like a subtle shadow due to Canvas Bloom (#f7f2f2) box-shadow. Padding can vary from 36px/42px/44px.

### Accent Content Card (Sky Card)

**Role:** Visually distinct information containers

Sky Card (#98d0ff) background with 32px border radius. Features a 2px inset border, no visible shadow. Has no internal padding, suggesting full-bleed content or image display.

### Underlined Input Field

**Role:** Form inputs

Transparent background with a 1px Storm Gray (#0d1117) bottom border. No border radius. Text uses Silka Regular, with 12px vertical padding on both top and bottom.

### Nev Logo Mark

**Role:** Brand identifier with gradient

Text 'nev' in Moranga Bold font, rendered with a horizontal gradient from #c679c4 to #ffb005.

## Do's

- Apply 32px border-radius to all card-like containers, strictly adhering to the soft, rounded aesthetic.
- Use Canvas Bloom (#f7f2f2) as the primary page background color to establish the system's light theme.
- Utilize Ink Black (#000000) for primary text and significant borders, ensuring strong legibility and definition.
- Employ Storm Gray (#0d1117) for secondary text and subtle navigational elements to create visual hierarchy.
- Implement the 2px inset Canvas Bloom (#f7f2f2) box-shadow for cards that require a soft, elevated look.
- Maintain a clear visual hierarchy by limiting saturated colors to accent cards or embedded imagery, keeping most UI achromatic.
- Ensure headings use Moranga Bold weight 400 with tight letter-spacing to convey authority through restraint.

## Don'ts

- Do not introduce sharp corners or small radii; the system relies on generous rounding (18px, 32px, 50px).
- Avoid using strong, saturated colors for primary UI elements like buttons or backgrounds, as they would clash with the understated palette.
- Do not deviate from the specified font families; '-apple-system' or 'Arial' are fallback systems, but 'Moranga Bold' and 'Silka' are brand-defining.
- Never use hard shadows or aggressive elevation effects; the design's lightness comes from subtle inset shadows and flat surfaces.
- Do not introduce complex gradients for functional UI elements; gradients are reserved for brand elements like the logo.
- Avoid overly dense layouts or small element gaps, as the design prioritizes comfortable spacing and clear separation.
- Do not use dark backgrounds for main content areas; the theme is predominantly light and airy.

## Imagery

Imagery primarily consists of contained, full-bleed product screenshots or abstract graphics within cards, often featuring pastel color palettes. Some hero images feature 3D-like emoji characters or flat illustrations. Photography is minimal, appearing within product context. Icons are typically filled and monochromatic (Ink Black or white), with a consistent stroke weight where outlined. The density is moderate, with images serving both decorative and explanatory roles within the card grid.

## Similar Brands

| Business | Why |
| --- | --- |
| Figma | Use of soft, rounded UI elements on a light background, emphasizing clean visual hierarchy. |
| Linear | Minimalist aesthetic focused on content within card-like structures and understated typography. |
| Read.cv | Personal portfolio site with a card-based layout and a focus on clean typography and spacious presentation. |
| Notion | White interface with soft borders and minimal chromatic accents, relying on clear surface separation. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
text: #000000
background: #f7f2f2
border: #000000
accent: #98d0ff
primary action: no distinct CTA color

**3-5 Example Component Prompts**
1. Create a Standard Content Card: background Surface White (#ffffff), 32px border radius, with 36px vertical and 42px horizontal padding. Include an Ink Black (#000000) heading using Moranga Bold at 24px and Storm Gray (#0d1117) body text using Silka Regular at 15px. Apply the 2px Canvas Bloom (#f7f2f2) inset box-shadow.
2. Design a Pill Navigation Item: Text 'Projects' in Silka Medium, weight 400. Text color Storm Gray (#0d1117). Border radius 18px. Padding 0px vertical, 12px horizontal. No background color.
3. Implement an Accent Content Card (Sky Card): background Sky Card (#98d0ff), 32px border-radius, no padding. This card will contain a full-bleed image.
4. Create an Outlined Switch-like Button: Text 'Toggle Lockdown' in Arial, weight 400. Text color Ink Black (#000000). Border radius 18px. Padding 0px vertical, 12px horizontal. Apply a boxShadow of rgb(240, 242, 248) 0px 0px 0px 2px inset.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514811787-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514811787-thumb.jpg |
