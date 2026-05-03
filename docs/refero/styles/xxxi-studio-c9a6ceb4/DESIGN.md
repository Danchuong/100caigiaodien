# XXXI.studio — Refero Style

- Refero URL: https://styles.refero.design/style/c9a6ceb4-c17c-4db5-9561-2f1af6b141a2
- Site URL: https://xxxi.studio
- ID: c9a6ceb4-c17c-4db5-9561-2f1af6b141a2
- Theme: light
- Industry: design
- Created: 2026-04-30T01:48:35.005Z
- Ranks: newest: 515, popular: 1276, trending: 1247

> gallery label on raw concrete

## Description

XXXI.studio employs a stark, almost architectural aesthetic, reminiscent of an unembellished gallery space. The design system is characterized by a high-contrast monochrome palette, minimal use of visual hierarchy, and precise typographic arrangements that feel more like labels and captions than flowing text. Emphasis is placed on direct content presentation with a sense of restrained utility and a muted, almost industrial background through subtle borders.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, body text contrast, focal text elements |
| Carbon Black | #000000 | neutral | Most body text, link text, primary heading text |
| Concrete Gray | #e5e7eb | neutral | Subtle borders for navigation items, links, and containers — provides a minimal visual separation without strong lines |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Neue Haas Grotesk | Helvetica Neue | 400 | 17px, 28px | 1.14, 1.18 | Primary typeface for all content including headings, body, links, and navigation. Its singular weight and precise letter spacing contribute to the system's unadorned, direct presentation style. |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "4px",
  "sectionGap": "",
  "cardPadding": "4px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Interactive text link, primarily in navigation context.

Black text (#000000) on Canvas White (#ffffff) background, with a Concrete Gray (#e5e7eb) bottom border on hover/active state to indicate interactivity. Uses Neue Haas Grotesk at 17px, weight 400.

### Footer Copyright

**Role:** Legal and copyright information.

Carbon Black (#000000) text on Canvas White (#ffffff) background. Uses Neue Haas Grotesk at 17px, weight 400, with 6px horizontal padding and 4px vertical padding.

### Project Label

**Role:** Labeling specific projects or items.

Carbon Black (#000000) text for project titles, with smaller text for auxiliary information like 'year'. Uses Neue Haas Grotesk, 28px for titles and 17px for details, weight 400. Text is presented directly on the Canvas White (#ffffff) background.

## Do's

- Always use Neue Haas Grotesk (or Helvetica Neue) at weight 400 for all textual elements.
- Prioritize Carbon Black (#000000) for all text on Canvas White (#ffffff) backgrounds.
- Implement a subtle Concrete Gray (#e5e7eb) border for interactive elements to signal state change.
- Maintain a compact density, using 4px and 6px for internal component and element spacing.
- Utilize 225px as a primary vertical margin for significant section breaks or footer separation.
- Keep all corners sharp with a 0px border radius, reinforcing the architectural aesthetic.

## Don'ts

- Avoid using any saturated or vivid colors; restrict the palette strictly to the defined monochrome neutrals.
- Do not introduce multiple font weights or styles; maintain the singular weight 400 for consistency.
- Refrain from using shadows or any form of elevation; elements should appear flat and integrated with the surface.
- Do not deviate from the specified spacing units of 4px, 6px, and 225px for elements and sections.
- Never add unnecessary decorative elements or complex backgrounds; the design should remain unembellished.

## Layout

The page adheres to a full-bleed layout, effectively using the entire viewport without a defined container width. The hero section features a full-screen image with minimal, centered text overlaid. Sections are demarcated by significant vertical spacing, particularly a 225px margin, rather than explicit dividers or alternating backgrounds. Content arrangement is primarily stacked or presented as direct visual showcases. Navigation appears minimal, typically located at the header and footer, acting more as metadata or project labels than traditional interactive menus.

## Imagery

The site's imagery consists solely of large, full-bleed architectural photography, primarily of interior spaces. These images are functional, acting as background canvases more than distinct content pieces, showcasing the studio's output directly. The treatment of images is raw and unmasked, allowing the photography's natural textures and lighting to define the visual atmosphere. Density is high, with imagery encompassing large portions of the screen, leaving text elements overlaid or adjacent, suggesting the visual documentation is paramount.

## Similar Brands

| Business | Why |
| --- | --- |
| Norm Architects | Monochromatic palette, subtle borders, high-quality architectural photography, and minimal typography. |
| Studio McGee (pre-eCommerce) | Focus on high-quality interior/architectural photography as primary content, minimal text overlays, and a restrained color palette. |
| The Future Kept | Emphasis on product (or project) photography, clean layouts, and a subdued, natural color scheme. |
| Apartamento Magazine | Unadorned presentation of visual content, often featuring architectural or interior shots with sparse, direct typography for labeling. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #e5e7eb
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a page hero: Full-bleed architectural image as background. Overlay 'XXXI.studio' as a heading at 28px Neue Haas Grotesk weight 400, #000000, centered at the top.
2. Design a project listing item: 'Street Smash Burgers Almada' as title at 28px Neue Haas Grotesk weight 400, #000000. 'year 2025' as subtitle at 17px Neue Haas Grotesk weight 400, #000000. Each item appears on a Canvas White (#ffffff) background.
3. Implement a primary navigation item: Text 'Info' in Carbon Black (#000000) at 17px Neue Haas Grotesk weight 400. On hover, apply a 1px solid Concrete Gray (#e5e7eb) bottom border, extending the full width of the text with 6px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513701067-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513701067-thumb.jpg |
