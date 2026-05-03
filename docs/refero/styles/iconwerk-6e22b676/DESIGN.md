# iconwerk — Refero Style

- Refero URL: https://styles.refero.design/style/6e22b676-90e0-4e1a-a230-2b52f331d0e4
- Site URL: https://www.iconwerk.com
- ID: 6e22b676-90e0-4e1a-a230-2b52f331d0e4
- Theme: light
- Industry: design
- Created: 2026-04-30T01:26:19.580Z
- Ranks: newest: 601, popular: 1133, trending: 1098

> Gallery of crisp forms

## Description

The iconwerk system is a minimalist black and white canvas for showcasing custom icon design. It prioritizes clarity and directness through a largely monochrome palette, sparse text, and a loose, airy layout. Visual interest comes from the high-contrast presentation of icons and the generous use of rounded rectangles, creating a playful, object-focused atmosphere. The overall impression is one of curated simplicity, allowing the icons themselves to be the main protagonists.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #000000 | neutral | Primary headings, body text, and icon fills on light surfaces. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | Arial, Helvetica, sans-serif | 400 | 14px | 1.21 | System fallback for general text, links, and image captions. Provides a clean, unadorned baseline. |
| Graphik | Inter, ui-sans-serif, system-ui | 400, 600 | 16px, 21px, 22px, 24px | 1.18, 1.19, 1.21 | Headlines and prominent body text. Graphik's robust modern sans-serif character supports the direct and functional aesthetic. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.21 |  |
| body-lg | 16 | 1.21 |  |
| subheading | 21 | 1.18 |  |
| heading-lg | 24 | 1.21 |  |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "28px",
    "cards": "28px",
    "buttons": "28px"
  },
  "elementGap": "5px",
  "sectionGap": "45px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Icon Card

**Role:** Container for individual icon examples

Squared card with a large 28px border-radius, often filled with a #000000 background for contrast or a neutral white, housing a centered icon image or text. Padding varies but often around 18px.

### Contact Button

**Role:** Primary call to action.

Text-only button with Ink Black text, 28px border-radius applied to an underlying clickable area, with a subtle border for hover states (though not explicitly detected in static data, implied by general design). Padding around text is implied to be minimal to maintain a ghost aesthetic.

## Do's

- Prioritize extreme visual clarity with #000000 text and borders against white or near-white backgrounds.
- Apply a generous 28px border-radius consistently to all interactive elements, cards, and prominent shapes.
- Maintain ample whitespace; use 45px for vertical section separation and 5px as a base unit for smaller element spacing.
- Use Graphik (or Inter) for all headlines and emphasized text, leveraging weights 400 and 600.
- Employ `"liga"` font feature settings for Graphik to enable ligatures, enhancing typographic refinement.
- Keep chromatic elements to a minimum, using color only for specific icon examples or very deliberate brand accent in content areas.

## Don'ts

- Avoid using multiple colors for interface elements; stick to the monochrome palette for UI.
- Do not use sharp corners; the 28px radius is a signature visual element.
- Refrain from dense layouts; maintain a spacious feel with generous padding and margins.
- Do not introduce heavy shadows or complex elevation; the system relies on flat, high-contrast surfaces.
- Avoid decorative gradients for UI elements; their absence reinforces clarity.

## Layout

The page uses a full-bleed layout for its main content area, with elements often centered or aligned to a relatively subtle grid. The hero section is a simple introductory text block with a logo. The main content is composed of a prominent 2x2 or 3x2 grid of 'Icon Cards' that alternate between dark and light backgrounds, creating a checkerboard-like visual rhythm. Each card is self-contained. Vertical spacing between content blocks is generous, around 45px. Navigation consists of a minimal top-right floating 'contact' button with a subtle logo.

## Imagery

The site's imagery is primarily product-focused, showcasing various icon designs and product integrations. It features tight crops of actual product hardware (like remote controls, ovens) or abstract scenes (landscapes, wood textures) serving as backgrounds for overlaid icons. Icons themselves are presented either as simple outlines (often #000000 or a specific accent color) on solid backgrounds, or integrated into realistic product mockups. The style is detailed and realistic for product depictions, while icons are clean and graphic, often monochromatic. Icon style leans towards outlined with a consistent stroke weight. Imagery is used to contextualize and demonstrate the icons' versatility rather than for decorative atmosphere.

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Both use a minimalist, high-contrast monochrome design with subtle rounded corners and a focus on functional clarity. |
| Stripe | Shares a clean, modern typographic approach and a spacious layout that emphasizes content over heavy UI chrome. |
| Figma | Similar aesthetic of clean lines, functional typography, and a grid-based presentation, letting the visual assets speak for themselves. |
| Vercel | Employs strong typography, a monochromatic base, and a focus on direct, uncluttered information delivery with minimal ornamentation. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #FFFFFF (implied, not explicitly in data)
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header: Top-aligned, minimal, containing the site logo (placeholder for now), and a 'contact' link. The link text is 'contact' in Ink Black, using 14px Arial, 28px border-radius on click area, ensuring the entire header remains visually light and unobtrusive.
2. Create an 'Icon Card': A square white surface with 28px border-radius. Center a placeholder icon (e.g., a simple 'X' shape) in Ink Black within this card. For a variant, display a similar card with an Ink Black fill and a white placeholder icon, maintaining the same 28px radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512365176-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512365176-thumb.jpg |
