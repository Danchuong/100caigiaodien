# VEED — Refero Style

- Refero URL: https://styles.refero.design/style/fff821ec-a3bf-41a5-aea2-626185bcd227
- Site URL: https://www.veed.io
- ID: fff821ec-a3bf-41a5-aea2-626185bcd227
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:51:43.752Z
- Ranks: newest: 680, popular: 636, trending: 373

> Vivid green workspace.

## Description

VEED champions a dynamic, high-contrast digital production studio feel, where rich dark surfaces meet a vibrant, almost neon, green for interactive elements. Typography is confident and direct, set against a backdrop of crisp white and dark gray panels that convey a sophisticated, tool-like precision. Visual hierarchy is established through a strong interplay of bold headings and generously spaced content blocks, punctuated by responsive, rounded components.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page background, card surfaces, secondary button background — establishes a clean, expansive base for content |
| Charcoal Black | #121212 | neutral | Prominent headings and body text, deep background for section accents — provides strong contrast against white and serves as a foundational dark surface |
| Slate Gray | #323232 | neutral | Primary text for body copy, button text, navigation links — ensures high readability on light backgrounds |
| Dark Granite | #292a2e | neutral | Section backgrounds, elevated surface treatments — creates depth and separation from the primary canvas |
| Medium Gray | #71737a | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Light Ash | #f2f1f0 | neutral | Secondary button backgrounds, subtle dividers — offers a soft, almost imperceptible neutral contrast |
| Electric Green | #96ff1a | brand | Primary call-to-action buttons, active states, key interactive elements — serves as the site's primary accent color, drawing immediate attention |
| Vivid Leaf | #d6ffa6 | brand | Card backgrounds, section highlights — a lighter, still vibrant green that softens areas while maintaining brand identity |
| Forest Shade | #083300 | brand | Text and icon color on bright green backgrounds, borders for outlined buttons — provides contrast and depth to the greens |
| Misty Mint | #e6ffc8 | brand | Subtle button backgrounds — a very pale green used for ghost or secondary actions |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| SwissNow | Inter | 400 | 11px, 12px, 13px, 14px, 16px, 40px, 44px, 54px | 0.88, 0.90, 1.00, 1.30, 1.36, 1.40, 1.43, 1.50, 1.80 | Primary font for body text, navigation, buttons, and form elements. Its utilitarian geometry balances clarity and a modern, slightly technical feel. |
| SwissNow | Inter | 500 | 11px, 12px, 13px, 14px, 16px, 40px, 44px, 54px | 0.88, 0.90, 1.00, 1.30, 1.36, 1.40, 1.43, 1.50, 1.80 | Used for emphasized body text, subheadings, and interactive components to provide slight visual weight without being overly bold. |
| SwissNow | Inter | 600 | 11px, 12px, 13px, 14px, 16px, 40px, 44px, 54px | 0.88, 0.90, 1.00, 1.30, 1.36, 1.40, 1.43, 1.50, 1.80 | For strong accents in body copy, and navigation links. Provides a confident visual presence. |
| PPEditorialNew | Playfair Display | 400 | 40px, 44px, 54px | 0.88, 0.90, 0.96, 1.00 | Exclusively for display headings, this typeface provides a distinctive, slightly condensed and elegant presence, contrasting with the SwissNow for branding impact. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.43 | 0.11 |
| body-lg | 16 | 1.3 | 0.16 |
| heading-sm | 40 | 1 | -0.64 |
| heading | 44 | 0.9 | -1.76 |
| display | 54 | 0.88 | -2.7 |

## Spacing & Shape

```json
{
  "radius": {
    "lg": "16px",
    "md": "10px",
    "sm": "4px",
    "pill": "58px"
  },
  "elementGap": "16px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action

Filled button with Electric Green background and Forest Shade text, using 'pill' radius. Padded 14px vertically and horizontally. Font: SwissNow weight 500.

### Secondary Action Button

**Role:** Alternative action

Outlined button with a Light Ash background and Slate Gray text, using a 12px radius. Padded 8px vertically and 12px horizontally. Font: SwissNow weight 500.

### Ghost Button

**Role:** Minimal interaction

Transparent background with Slate Gray text, 8px radius, padded 8px vertically and 12px horizontally. Font: SwissNow weight 500.

### Dark Elevated Button

**Role:** Content container button

Dark Granite background with Charcoal Black text, 16px radius, no padding inside, acts as a container for content. Font: SwissNow weight 500.

### Promotional Card - Vivid Leaf

**Role:** Highlight content block

Vivid Leaf background with 16px radius. Internally padded 24px on all sides. Content styled with Charcoal Black text. No box shadow.

### Feature Card - Canvas White

**Role:** Standard content block

Canvas White background with 10px radius. Internally padded 16px on all sides. Content styled with Slate Gray text. No box shadow.

### Dark Section Card

**Role:** Full-width section background

Charcoal Black background with 16px radius. Internally padded 40px vertically, no horizontal padding. Used for prominent full-width content blocks.

### Input Field

**Role:** Data entry

Transparent background with Slate Gray text, a bottom border of 1px solid Medium Gray. Padded 20px top, 12px horizontal, 6px bottom. No explicit border radius on main input area.

## Do's

- Use Electric Green (#96ff1a) for primary calls to action, drawing immediate attention and signifying interactivity.
- Maintain a high contrast between text and background colors, primarily using Charcoal Black (#121212) or Slate Gray (#323232) on Canvas White (#ffffff) or Vivid Leaf (#d6ffa6).
- Apply 'pill' radius (58px) to all primary action buttons for a soft, approachable feel.
- Use PPEditorialNew weight 400 for all display headings to convey a distinctive, editorial brand voice at sizes 40px, 44px, and 54px.
- Employ consistent 16px element gaps for comfortable content separation, especially between cards and form elements.
- Structure large content blocks with a minimum of 24px internal padding to ensure ample breathing room.
- Utilize Dark Granite (#292a2e) for distinct section backgrounds to create visual separation and dynamic alternation with Canvas White.

## Don'ts

- Avoid using multiple chromatic colors for primary interactive elements; reserve Electric Green (#96ff1a) for this role.
- Do not introduce sharp corners; components should adhere to the established radii of 4px, 10px, 16px, or 58px.
- Refrain from heavy drop shadows; elevation should be minimal, primarily relying on background color shifts and subtle border treatments.
- Do not break the established type scale; use the defined sizes and letter-spacing values to maintain typographic rhythm.
- Avoid dense, information-heavy blocks of text; prioritize generous line heights and ample whitespace to enhance readability.
- Do not use generic system fonts; SwissNow and PPEditorialNew are key to the brand's unique typographic identity.
- Do not use gradients as primary backgrounds or borders; color changes should primarily be solid for clarity and directness.

## Imagery

The site favors highly curated, lifestyle-oriented photography and clean, product-focused screenshots. Photography often features candid, brightly lit individuals making eye contact, conveying authenticity and engagement. Product screenshots highlight UI elements with clarity, frequently against plain white or abstract backgrounds, sometimes with graphic overlays. Icons are simple, outlined, and monocolor, primarily in Forest Shade or Electric Green. Imagery is thoughtfully contained within card components with rounded corners rather than full-bleed, creating a gallery-like presentation. The density is moderate; visuals are prominent but always balanced with significant text blocks.

## Elevation

| Element | Style |
| --- | --- |
| Button (hover/active) | rgba(68, 68, 70, 0.15) 0px 1px 2px -1px, rgba(68, 68, 70, 0.05) 0px 2px 5px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Descript | Clean, product-focused UI with an emphasis on clarity, similar dual-font approach for headings and body text, and a strong accent color. |
| RunwayML | AI-focused creative tool with a high-contrast aesthetic, combining dark and light surfaces with a vibrant brand accent. |
| Canva | Emphasis on ease of use for content creation, bright hero sections, and a systematic use of cards for content display. |
| Copilot.gg | Heavy use of a single, vibrant accent color against a largely monochrome (white/dark gray) background, with rounded components and modern typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #323232
background: #ffffff
border: #71737a
accent: #96ff1a
primary action: #96ff1a (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #96ff1a background, #0c0a09 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a Feature Card: Vivid Leaf background #d6ffa6, 16px radius, internally padded 24px. Headline 'Generate videos' at 40px SwissNow weight 600, #121212, letter-spacing -2.0px. Body text 'Turn any idea into a video worth posting - no camera needed' at 14px SwissNow weight 400, #323232.
3. Create a dark section background: Dark Granite background #292a2e, with a centered headline 'Generate videos that look like your brand, not AI' at 44px PPEditorialNew weight 400, #ffffff, letter-spacing -1.76px. Ensure vertical padding of 40px at the top and bottom of the section.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510272754-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510272754-thumb.jpg |
