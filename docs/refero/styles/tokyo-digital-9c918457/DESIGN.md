# Tokyo Digital — Refero Style

- Refero URL: https://styles.refero.design/style/9c918457-272b-4ab7-a5f1-f7446400cec3
- Site URL: https://tokyo.uk
- ID: 9c918457-272b-4ab7-a5f1-f7446400cec3
- Theme: dark
- Industry: agency
- Created: 2026-04-30T03:13:06.626Z
- Ranks: newest: 205, popular: 761, trending: 609

> midnight command center

## Description

Tokyo Digital evokes a 'midnight command center' aesthetic, designed around a stark black canvas and crisp white typography. The system emphasizes clear information delivery through strong typographic hierarchy and minimal UI embellishments. Interactive elements are subtly delineated by outlines or slight opacity shifts, maintaining a low-key, professional atmosphere. Visual interest is primarily driven by dynamic hero content and the interplay of negative space.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Zero | #000000 | neutral | Page backgrounds, card surfaces, primary text on light backgrounds, ghost button borders |
| Canvas White | #ffffff | neutral | Primary text on dark backgrounds, interactive button fills, input backgrounds |
| Ghost Gray | #808080 | neutral | Input border lines, secondary text |
| Muted Action | #999999 | neutral | Subtle button backgrounds |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Aeonik | system-ui, sans-serif | 300, 400 | 8px, 16px, 24px, 40px, 63px | 1.00, 1.10, 1.30, 1.50 | Primary typeface for all text elements. The use of lighter weights for headings brings an understated, modern authority, contrasting with the graphic nature of the hero section. Normal letter spacing across the board maintains clarity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.5 |  |
| subheading | 24 | 1.3 |  |
| heading | 40 | 1.1 |  |
| display | 63 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "images": "8px",
    "inputs": "8px",
    "buttons": "8px"
  },
  "elementGap": "4px",
  "sectionGap": "120px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button (Circular)

**Role:** Interactive element, often seen with zero padding for large click areas or icons.

backgroundColor: rgba(255, 255, 255, 0.6) transitioning to rgba(255, 255, 255, 1) on hover/active. color: #000000. borderRadius: 100%. No padding specified, implies content dictates size.

### Text Input Field

**Role:** Standard form input for collecting user data.

backgroundColor: rgba(0, 0, 0, 0) (transparent). color: #ffffff (text). borderTopColor: rgba(255, 255, 255, 0.5). borderRadius: 8px. padding: 32px top/bottom, 16px left/right. Placeholder text implicit in Ghost Gray.

### Client Logo Grid Item

**Role:** Displaying brand partners, often in a grid.

backgroundColor: rgba(0, 0, 0, 0). borderRadius: 0px. boxShadow: none. padding: 0px. Presents logos without visual container, relying on layout for separation.

## Do's

- Maintain a predominantly black background using #000000 for canvas and main surfaces.
- Use #ffffff for primary text content against dark backgrounds to ensure high contrast.
- Apply Aeonik at weight 400 for body text and 300 for headings to create an airy, authoritative feel.
- Use 8px border-radius generously for interactive elements like buttons and input fields.
- Delimit input fields with a subtle rgba(255,255,255,0.5) border for a 'ghost' UI effect.
- Employ sections with 120px vertical padding for clear content separation.

## Don'ts

- Avoid using strong, saturated colors for UI elements; stick to the achromatic palette with minimal accent.
- Do not introduce heavy box shadows or elevation effects; the design relies on flatness and sharp contrast.
- Do not compromise on the high contrast between text and background; low contrast text is not part of this system.
- Avoid decorative borders on card elements; instead, use spacing to define content blocks.
- Do not vary line-height significantly from the defined font profiles, especially for headings, to preserve typographic rhythm.
- Do not apply padding to cards or grid items unless specifically requested; design expects zero-padded elements by default.

## Imagery

This system features a mix of dynamic, full-bleed 3D rendered scenes (like the initial car interior) and abstract, colorful visuals for the hero section, contrasted with clean, product-focused logos for client showcases. Imagery is primarily decorative and atmospheric, acting as a backdrop or visual metaphor. Icons, if present, are minimal and likely outlined. The density is high in hero sections, with imagery dominating, while content sections are text-dominant with client logos serving as visual points. Photography is largely absent; the emphasis is on digital-native graphical elements.

## Similar Brands

| Business | Why |
| --- | --- |
| Huge Inc. | Similar dark immersive hero sections with large typography and stark, modern aesthetic. |
| Fantasy Interactive | Emphasis on dramatic large-scale visuals and minimal UI on a dark canvas, with strong typographic hierarchy. |
| AKQA | Digital agency with a sophisticated, often dark-themed, and content-forward presentation style. |
| Studiometa | Modern dark UI, strong reliance on typography and negative space, with subtle interactive elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #000000
border: rgba(255, 255, 255, 0.5)
accent: none observed
primary action: #ffffff (filled action)

Example Component Prompts:
1. Create a hero text block: 'Creative and technical experts partnering...' using Aeonik weight 400 at 40px with #ffffff on a #000000 background.
2. Design a circular 'Menu' button: 100% border-radius, background rgba(255, 255, 255, 0.6), text #000000 (Aeonik weight 400 at 16px), no padding.
3. Build a contact form input for 'Email address': transparent background, text #ffffff (Aeonik weight 400 at 16px), border #808080, 8px border-radius, 32px vertical padding, 16px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518768715-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518768715-thumb.jpg |
