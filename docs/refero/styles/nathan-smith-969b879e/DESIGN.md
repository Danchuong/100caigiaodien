# Nathan Smith — Refero Style

- Refero URL: https://styles.refero.design/style/969b879e-166b-4c1f-9c33-e44fa643188c
- Site URL: https://nathansmith.design
- ID: 969b879e-166b-4c1f-9c33-e44fa643188c
- Theme: dark
- Industry: agency
- Created: 2026-02-14T20:13:22.000Z
- Ranks: newest: 1185, popular: 228, trending: 215

> Raw pixels on a pure black canvas. Imagine a high-contrast terminal, where information is stark and unyielding, punctuated by sudden, vibrant bursts of color.

## Description

This design system feels like a minimalist display terminal, prioritizing stark readability over ornamentation. Pure black backgrounds serve as an absolute void, upon which unashamedly bold, high-contrast typography in 'off-white' is projected. The deliberate absence of rounded corners across primary content elements, except for navigation pills, creates a tension between sharp utility and interactive cues. Sudden, vivid blocks of color act as dynamic project showcases, appearing almost as glitches or command line outputs against the monochrome UI.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Black | #000000 | neutral | Primary background for the entire interface, card shadows — the foundational darkness. |
| Ghost White | #f5f4ee | neutral | Primary text color, links, and borders for subtle UI differentiation. It's an off-white, preventing the absolute harshness of pure white against black. |
| Off Black | #333333 | neutral | Used for some navigation elements and less prominent text, creating a slight visual hierarchy without losing clarity against Ghost White. |
| Emerald Screen | #017051 | accent | Project card background — a deep, rich green implying growth or nature, but stylized. |
| Neon Lemon | #deeb52 | accent | Project card background — a vibrant, almost artificial yellow-green providing a stark, energetic contrast. |
| Fuchsia Burst | #fe7cd2 | accent | Project card background — a vivid, playful pink that injects high energy into the monochrome canvas. |
| Blazing Orange | #f95720 | accent | Project card background — a fiery, direct orange, communicating immediacy and boldness. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Mabry pro | Space Mono | 400 | 80px | 1.00 | Display headlines and hero text. The singular large size and tight line height create a commanding vocal presence without excessive visual weight. This font’s character defines the raw, almost digital aesthetic. |
| Fk Display | Inter | 400 | 14px, 16px, 24px | 1.20, 1.50 | Primary body text, navigation items, links, and all smaller UI elements. Its clean, geometric form ensures clarity across various sizes, acting as a functional workhorse that complements the display font's boldness. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 14 | 1.2 |  |
| body | 16 | 1.2 |  |
| heading | 24 | 1.5 |  |
| display | 80 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "buttons": "100px",
    "general": "8px",
    "navItems": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "128px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Pills



### Award Notification Box



### Project Cards Grid



### Primary Navigation Pill

**Role:** Interactive element allowing user navigation.

Rounded pill button with a 100px border-radius. Inactive state: Absolute Black background, Ghost White text (Fk Display 16px). Active state (inferred): Ghost White background, Off Black text. Padding is 16px horizontal, 8px vertical.

### Footer Link

**Role:** Small, functional links in the footer.

Ghost White text (Fk Display 14px) on an Absolute Black background. Features a leading arrow (→) as a visual cue. No padding or borders.

### Award Notification Box

**Role:** Small, toast-like notification for achievements.

A small, rounded rectangle (4px radius) with an Absolute Black background and Ghost White text (Fk Display 14px). Features a subtle inline image of pencils to signify awards. Contains a right-aligned '4 more' link in Off Black.

### Hero Headline

**Role:** Dominant text on the initial screen, establishing brand identity.

Large, uppercase Mabry Pro text at 80px, weight 400, Ghost White color (#f5f4ee), with a tight line height of 1.0. Appears centered on the Absolute Black background.

## Do's

- Do use Absolute Black (#000000) as the primary background for all page sections and elevated components.
- Do use Ghost White (#f5f4ee) for all primary text content and interactive element states to ensure maximum contrast.
- Do apply 0px border-radius to all content-bearing elements like Project Cards to maintain a sharp, utilitarian aesthetic.
- Do use the Mabry pro font (weight 400, size 80px, line-height 1.0) for all main headlines to establish a bold, direct tone.
- Do punctuate the monochrome design with single, vivid accent colors (#017051, #deeb52, #fe7cd2, #f95720) only for project cards and other intentional focal points.
- Do use a consistent 100px border-radius for all navigation pills to distinguish interactive elements with softness against the prevailing angularity.

## Don'ts

- Don't introduce any soft-edged shapes or general rounded corners outside of explicit navigation elements.
- Don't use gradients; stick to solid color blocks for backgrounds and accents.
- Don't introduce subtle background patterns or textures; maintain pure, flat color fields.
- Don't use desaturated or muted colors for accents; only vivid, high-chromatic colors are permitted where color is used.
- Don't vary font weights for Fk Display; it should remain weight 400 across all its usage.
- Don't break the tight line-height (1.0) for Mabry pro headlines; its impact relies on close text packing.

## Layout

The site uses a full-bleed layout on an Absolute Black background. The hero section features large, centered typographic elements (Mabry Pro) that demand attention. Content sections appear to stack vertically, with substantial vertical spacing (sectionGap: 128px) providing breathing room. Project showcases are presented as distinct, vivid color blocks, sometimes overlapping partially, breaking the rigid grid. The overall layout is centered-content with flexible margins that adjust to viewport size, rather than a fixed maximum width container for the main content. The navigation is a minimalist top-bar on the left, featuring pill-shaped buttons. The footer contains left-aligned and right-aligned text links, maintaining the high-contrast aesthetic.

## Imagery

The visual language is dominantly UI-focused, with minimal use of external imagery. When present, imagery (like the small pencil icons in the award notification) is functional and iconographic, not lifestyle. Project showcases utilize bold, solid color blocks (Emerald Screen, Neon Lemon, Fuchsia Burst, Blazing Orange) instead of traditional images or product screenshots. These color blocks are presented full-bleed within their respective card areas, with raw, sharp edges, acting as abstract placeholders or categorical signifiers rather than detailed visual content. The site is text-dominant, relying on typography and stark color contrasts to convey information and atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Project Preview Card | rgba(0, 0, 0, 0.75) 0px 24px 30px 3px |

## Similar Brands

| Business | Why |
| --- | --- |
| Brutalist Websites | Employs an unornamented, functional aesthetic, raw typography, and high-contrast color choices on a stark black background. |
| Terminal.com | Features a black background with bright, functional text and UI elements, reflecting a command-line interface feel. |
| Early Internet Art Sites | Often utilized pure black backgrounds, simple shapes, and bold, uncompromising typography without gradients or complex layouts. |
| Some portfolio sites by graphic designers | Exhibit a strong emphasis on typography as a primary visual element, often with a reduced color palette punctuated by strong accents. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #f5f4ee (Ghost White)
- Background: #000000 (Absolute Black)
- Accent Green: #017051 (Emerald Screen)
- Accent Yellow: #deeb52 (Neon Lemon)
- Nav Text (less prominent): #333333 (Off Black)

### 3-5 Example Component Prompts
1. Create a Primary Navigation Pill for 'Projects': Absolute Black background, Ghost White text (#f5f4ee), 100px border-radius, Fk Display font 16px, weight 400. Paddings should be 16px horizontal and 8px vertical.
2. Create a Project Preview Card using the Emerald Screen accent color: Background color #017051, 0px border-radius. Apply the shadow rgba(0, 0, 0, 0.75) 0px 24px 30px 3px. Ensure no internal padding.
3. Create the Hero Headline 'NATHAN SMITH': Mabry pro font 80px, weight 400, line-height 1.0, color #f5f4ee. Center it on an Absolute Black background.
4. Design a Footer Link for '→ mail@nathansmith.design': Fk Display font 14px, weight 400, color #f5f4ee, on an Absolute Black background. Include the arrow character as shown.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925710526-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925710526-thumb.jpg |
