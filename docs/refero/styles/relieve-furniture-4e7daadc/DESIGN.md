# Relieve Furniture — Refero Style

- Refero URL: https://styles.refero.design/style/4e7daadc-3dc4-4211-bf25-626ea7b216e6
- Site URL: https://relievefurniture.com
- ID: 4e7daadc-3dc4-4211-bf25-626ea7b216e6
- Theme: light
- Industry: other
- Created: 2026-04-30T03:47:28.030Z
- Ranks: newest: 65, popular: 905, trending: 774

> Sustainable canvas, precise purpose

## Description

Relieve Furniture uses a calm, sustainable efficiency aesthetic: light, airy canvases, subtle elevation, and a focused palette of muted greens and purples. Typography is precise and airy, conveying information clearly without visual clutter. Components often feature soft rounded corners, suggesting approachability within an otherwise crisp, structured layout. The overall impression is one of organized, eco-conscious professionalism.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Fog | #f6f7f7 | neutral | Secondary surface background, subtle button backgrounds, light card backgrounds |
| Snowdrift | #ffffff | neutral | Primary background for cards, modals, and default page sections |
| Ash Cloud | #e7e5e4 | neutral | Hairline borders, subtle dividers, inactive UI elements |
| Midnight Forest | #0b392f | brand | Primary body text, headers, strong borders, dark iconography, navigation links |
| Verdant Sprout | #0cea9e | accent | Green action color for filled buttons, selected navigation states, and focused conversion moments |
| Amethyst Glow | #6f52d3 | accent | Accent for key headings, primary navigation hover states, and highlighted text |
| Deep Plum | #6043ba | accent | Background for secondary action buttons, often ghosted or outlined |
| Graphite Text | #374151 | neutral | Secondary text, muted links, and low-emphasis information |
| Stone Grey | #778a83 | neutral | Muted text, placeholder text, disabled element borders |
| Coal Black | #000000 | neutral | Strongest text, card backgrounds for high contrast sections, critical iconography |
| Slate Blue | #7f6de1 | accent | Background for feature cards, often used in contrast with dark text |
| Dark Forest | #0b704e | brand | Subtle green text accents, secondary green links |
| Carbon Gray | #333c39 | neutral | Dark button backgrounds, contrasting small elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Planar | system-ui, sans-serif | 200, 300, 400 | 10px, 11px, 12px, 13px, 14px, 16px, 17px, 20px, 22px, 24px, 26px, 32px, 36px | 1.00, 1.15, 1.20, 1.40, 1.50, 1.60, 1.70, 2.00 | The primary typeface for all text content including headings, body, buttons, and navigation. Its slightly condensed nature and varying weights, especially the lighter 200 and 300 for larger headings, contribute to the site's airy and precise feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.7 |  |
| body | 14 | 1.6 |  |
| heading-sm | 22 | 1.4 |  |
| heading | 24 | 1.2 |  |
| heading-lg | 32 | 1.15 |  |
| display | 36 | 1 | -0.9 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "chips": "9999px",
    "images": "8px",
    "buttons": "8px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Primary Button

**Role:** Default action button variant, outlines call-to-actions.

Transparent background, 'Midnight Forest' #0b392f text and 1px border, 0px border-radius, no padding (text-only link style).

### Subtle Recessed Button

**Role:** Secondary action button for internal navigation or less prominent actions.

'Canvas Fog' #f6f7f7 background, 'Midnight Forest' #0b392f text, 1px 'Ash Cloud' #e7e5e4 border, 8px border-radius, 10px vertical and 20px horizontal padding.

### Dark Filled Button

**Role:** Prominent action button for high-attention calls to action.

'Carbon Gray' #333c39 background, 'Snowdrift' #ffffff text, 8px border-radius, 10px padding all around. Used for primary actions like 'Book a free call'.

### Flat Content Card

**Role:** Information display card, primarily for textual content or small images without elevation.

'Canvas Fog' #f6f7f7 background, 8px border-radius, 20px padding (top, right, left) and 5px bottom padding, no shadow.

### Elevated Tooltip Card

**Role:** Interactive pop-up or dialog card for focused information.

'Snowdrift' #ffffff background, 12px border-radius, 15px padding all around. Shadow: rgba(0, 0, 0, 0.25) 0px 0px 15px 0px.

### Text-Only Card

**Role:** Flexible card for information display, often used without distinct background or borders.

Transparent background, 0px border-radius, no specific padding, no shadow.

### Image Feature Card

**Role:** Card with background image, typically featuring a large image or visual element.

'Coal Black' #000000 background (for contrast with white text overlay), 8px border-radius, 660px top padding (for image), no shadow. Content usually overlays the image.

### Highlight Tag

**Role:** Small informational tag, often for 'New' features or status updates.

'Verdant Sprout' #0cea9 background, black text, 9999px border-radius (pill shape), fixed 1px top/bottom and 2px left/right padding.

## Do's

- Use 'Midnight Forest' #0b392f for primary text, links, and strong borders to maintain brand consistency.
- Apply 'Canvas Fog' #f6f7f7 as the background for secondary content blocks and subtle button variants.
- Reserve 'Verdant Sprout' #0cea9 and 'Amethyst Glow' #6f52d3 for functional highlights, accents, and call-to-action indicators, avoiding decorative overuse.
- Utilize Planar font with a weight of 400 for body text and 300 for prominent headings, maintaining an airy and readable aesthetic.
- Apply 8px border-radius consistently to all buttons, cards, and images, creating a soft, approachable feel.
- Ensure generous use of 10px element gaps and 20px card padding for a compact, yet not crowded, information density.
- Use rgba(0, 0, 0, 0.25) 0px 0px 15px 0px for all elevated components to provide subtle depth without heavy visual weight.

## Don'ts

- Do not introduce strong, saturated colors beyond 'Verdant Sprout' #0cea9 or 'Amethyst Glow' #6f52d3 for UI elements.
- Avoid heavy shadows or gradients on primary UI elements; surfaces should appear mostly flat or with subtle elevation.
- Do not use highly decorative or script fonts; stick to the Planar family to maintain the system's clean, precise tone.
- Do not deviate from the established 8px and 12px border radii for components; sharp corners are not part of this design language.
- Do not create dense, text-heavy blocks without adequate line-height (1.6 for body text) or clear visual separation.
- Avoid using multiple font sizes for adjacent text elements; stick to the defined type scale to maintain visual hierarchy.

## Layout

The site employs a max-width contained layout, typically centered, with notable exceptions such as full-bleed header and hero sections. The hero prominently features a centered headline over a white background, with calls to action below. Section rhythm is generally consistent with vertical spacing, often alternating between white and very light gray backgrounds, creating distinct content blocks. Content is arranged in alternating text-left/image-right or image-left/text-right patterns, and in grids for cards, particularly 2-column layouts. The overall density is compact but with sufficient breathing room provided by consistent margins and padding, contributing to a clean, organized feel. A sticky top navigation bar provides consistent access to primary sections.

## Imagery

Imagery on Relieve Furniture typically features tightly cropped, professional product photography (office furniture, tech devices) or diverse team member photographs. Product shots often appear against neutral or dark backgrounds, highlighting the object itself. Photos are high-key and well-lit. Illustrations are minimal and functional, often appearing as subtle decorative elements or icons in a solid, filled style. Icons are clean, outlined, and monochromatic, primarily in 'Midnight Forest' #0b392f or 'Verdant Sprout' #0cea9e. There is a strong emphasis on visuals that communicate modern utility and sustainability, with imagery acting as explanatory content or product showcases rather than decorative atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Tooltip Card | rgba(0, 0, 0, 0.25) 0px 0px 15px 0px |
| Card with subtle shadow | rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px |

## Similar Brands

| Business | Why |
| --- | --- |
| OpenSpace | Monochromatic light-theme with a single, vivid brand accent color and clean typography. |
| Fieldguide | Focus on subtle surface variation for hierarchy, combined with minimal shadow usage and a similar compact feel. |
| Balsamiq | Emphasis on functional, direct UI elements, unadorned typography, and a subdued color palette for productivity. |
| Linear | Precise, slightly condensed typography, sparse use of color for functional indicators, and compact component design. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
- text: #0b392f
- background: #ffffff
- border: #e7e5e4
- accent: #0cea9e
- primary action: #0cea9e (filled action)

**3-5 Example Component Prompts:**
- Create a Hero Headline: 'The future of sustainable offices is circular' using Planar font, size 36px, weight 300, color #0b392f, letter-spacing -0.9px, centered on a #ffffff background.
- Create a Subtle Recessed Button: 'I want to browse circular furniture' using Planar font, size 14px, weight 400, color #0b392f, background #f6f7f7, border 1px solid #e7e5e4, 8px border-radius, 10px vertical and 20px horizontal padding.
- Create an Elevated Tooltip Card: 'Need help finding the right furniture?' using Planar font, size 14px, weight 400, color #0b392f. Background #ffffff, 12px border-radius, 15px padding all around, with a shadow of rgba(0, 0, 0, 0.25) 0px 0px 15px 0px.
- Create a Highlight Tag: 'NEW' using Planar font, size 10px, weight 400, color #000000, background #0cea9e, 9999px border-radius, 1px vertical and 2px horizontal padding.
- Create a Dark Filled Button: 'Book a free call with a team member today' using Planar font, size 14px, weight 400, color #ffffff, background #333c39, 8px border-radius, 10px padding all around.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520825427-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520825427-thumb.jpg |
