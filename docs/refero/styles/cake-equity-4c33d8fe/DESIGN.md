# Cake Equity — Refero Style

- Refero URL: https://styles.refero.design/style/4c33d8fe-81d5-46cb-9dc1-dd231be1c9ec
- Site URL: https://www.cakeequity.com
- ID: 4c33d8fe-81d5-46cb-9dc1-dd231be1c9ec
- Theme: light
- Industry: fintech
- Created: 2026-04-30T00:57:36.917Z
- Ranks: newest: 656, popular: 935, trending: 861

> precision ledger on a clean slate

## Description

Cake Equity's visual system evokes a precise, supportive atmosphere with a foundation of stark neutrals and a vibrant, warm purple accent. Clean surfaces and intentional use of border radii define interactive elements and containers. Typography is confident and direct, emphasizing clear information hierarchy, while a bright lime green and soft blue punctuate feature areas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #18161a | neutral | Primary text, strong headings, dark backgrounds for contrast, outlines |
| Polar White | #ffffff | neutral | Page backgrounds, card surfaces, button text against saturated colors |
| Cloud Gray | #fafaf8 | neutral | Subtle section backgrounds, alternative card background |
| Stone Slate | #333333 | neutral | Secondary text, icon fills, subtle borders |
| Ash Mist | #898b91 | neutral | Muted text, subtle borders, inactive states |
| Lilac Gray | #ede9ff | neutral | Card borders, subtle decorative accents |
| Lavender Hue | #d9d2ff | neutral | Decorative borders, subtle UI element outlining |
| Plum Royal | #4823ff | brand | Primary action buttons, prominent links, interactive highlights — establishes brand action |
| Vivid Violet | #6d67fb | brand | Accent text within headlines, active navigation indicators |
| Soft Indigo | #7e78ff | brand | Subtle background for UI elements, inactive states |
| Lime Spritz | #e7ff6e | accent | Highlight cards, callout sections — a vibrant, attention-grabbing accent |
| Sky Whisper | #99cefe | accent | Subtle background for complementary information panels |
| Pale Plum | #dfddff | accent | Icon backgrounds, very light decorative fills |
| Sunset Orange | #ffa360 | accent | Secondary accent for small highlights or decorative elements |
| Phantom Deep Violet | #2b1599 | brand | Hero background gradient start, providing depth and a premium feel |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Plus Jakarta Sans | Inter | 700 | 63px, 77px | 1.00 | Hero headlines and significant display text leveraging a single bold weight for impact. The tight letter spacing creates a dense, modern block of text that feels commanding. |
| Inter | system-ui | 300, 400, 500, 600, 700 | 11px, 12px, 13px, 14px, 15px, 16px, 17px, 18px, 20px, 22px, 31px | 0.86, 1.00, 1.10, 1.20, 1.29, 1.30, 1.40, 1.45, 1.50, 1.53, 1.60, 1.80, 2.00 | Body copy, subheadings, navigation, buttons, and all other UI text. A versatile sans-serif used across a broad range of sizes and weights to establish clear hierarchy and readability on a light canvas. Noticeable tight tracking on larger sizes to prevent sprawl. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.5 | 0.05 |
| body-sm | 14 | 1.5 | 0.004 |
| body | 16 | 1.5 | -0.001 |
| body-lg | 18 | 1.5 | -0.01 |
| subheading | 22 | 1.4 | -0.01 |
| heading | 31 | 1.3 | -0.045 |
| heading-lg | 63 | 1 | -0.032 |
| display | 77 | 1 | -0.04 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "999px",
    "cards": "20px",
    "icons": "50px",
    "links": "12px",
    "buttons": "100px",
    "general": "16px"
  },
  "elementGap": "20px",
  "sectionGap": "71px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action.

Filled button with Plum Royal (#4823ff) background, Polar White (#ffffff) text, and a highly rounded (100px) border-radius. Padding is 12px vertical, 25px horizontal. Uses Inter font.

### Secondary Outlined Button

**Role:** Secondary call to action, ghost buttons.

Ghost button with transparent background, Midnight Ink (#18161a) text and a 1px Midnight Ink border. Rounded (100px) border-radius. Padding 20px vertical, 36px horizontal. Uses Inter font.

### Navigation Link

**Role:** Primary navigation items.

Transparent background, Stone Slate (#333333) text, and 0px border-radius. Minimal padding 5px vertical, 0px horizontal. Uses Inter font.

### Default Card

**Role:** General content container.

Polar White (#ffffff) background, 20px border-radius, no shadow. Internal padding 15px on all sides.

### Highlight Card (Lime Spritz)

**Role:** Promotional or featured content container.

Lime Spritz (#e7ff6e) background, 20px border-radius, no shadow. Internal padding 30px on all sides.

### Subtle Accent Card (Sky Whisper)

**Role:** Informational or complementary content card.

Sky Whisper (#99cefe) background, 20px border-radius, no shadow. Internal padding 20px on all sides.

### Informational Pane (Soft Indigo)

**Role:** Embedded UI panels or data displays.

Soft Indigo (#7e78ff) background with a 10% opacity, 20px border-radius, no shadow. Padding 20px on all sides.

## Do's

- Prioritize Midnight Ink (#18161a) for all primary text and main headings on light backgrounds.
- Use Plum Royal (#4823ff) exclusively for primary interactive elements, ensuring high contrast with Polar White (#ffffff) text.
- Employ Polar White (#ffffff) as the dominant background color for most sections, cards, and interactive elements for a crisp, legible foundation.
- Apply 20px border-radius to all major containers like cards and image masks, softening their visual presence.
- Ensure buttons maintain a 100px border-radius for a distinct pill-like shape, signalling interactiveness.
- Utilize Plus Jakarta Sans 700 with aggressive letter-spacing for large, impactful headlines to create a condensed, authoritative statement.
- Incorporate Lime Spritz (#e7ff6e) sparingly for intentional highlights or call-to-action cards, preventing overuse that could diminish its impact.

## Don'ts

- Avoid using multiple chromatic colors for primary actions; Plum Royal (#4823ff) is the singular choice for this purpose.
- Do not introduce complex shadow patterns; maintain a flat or nearly flat aesthetic, with elevation hinted through color changes or subtle outlines.
- Refrain from widely varying border-radius values. Stick to the defined system (20px for cards, 100px for buttons) for visual consistency.
- Do not use dark backgrounds for large content blocks outside of specifically designed hero sections or dark UI panels, as the system relies on a light canvas.
- Avoid decorative images with overly complex compositions or busy backgrounds; prioritize product screenshots or clean illustrations.
- Do not use letter-spacing on small body text, reserving it for larger headings to maintain readability.
- Resist using a strong border on filled buttons; rely on background color for visual distinction of primary actions.

## Layout

The page primarily uses a max-width contained model, centered on the screen, creating a focused content area. The hero section follows a split layout, featuring a large headline and supporting text on the left, counterbalanced by a product UI preview on the right, which itself is often a dark-themed card on the light canvas. Section rhythm is marked by consistent vertical spacing, often with alternating light (#fafaf8, #ffffff) and accent-colored (#e7ff6e) backgrounds, creating clear visual breaks. Content arrangement frequently alternates between text-left/visual-right and visual-left/text-right patterns within two-column sections. Card grids are used for features and testimonials. Navigation is a simple top bar with clearly defined links and two distinct button types (ghost and primary filled CTA).

## Imagery

The site predominantly uses product screenshots and contained abstract graphics. Product screenshots are clean, showcasing UI in context with a focused, minimal framing. Illustrations leverage a flat, organic style, often outlined or with solid brand-colored fills, serving primarily as decorative atmosphere. Icons are filled, with a moderate stroke weight, typically monochrome. The density is image-heavy in feature sections, with graphics playing an explanatory role, showing actual product functionality. Images are contained within defined boundaries, rarely overlapping, and often benefit from the standard 20px border-radius.

## Similar Brands

| Business | Why |
| --- | --- |
| Rippling | Similar light, clean canvas with clear surface separation and strong, single-color calls to action. |
| Brex | Uses a vibrant, singular brand color as a primary accent against a largely achromatic UI, similar to Cake Equity's Plum Royal. |
| Gusto | Employs a comfortable density in layouts with distinct card elements and clear typography hierarchy on a light background. |
| Carta | A direct competitor with visual emphasis on product UI screenshots within a clean, professional, and slightly corporate-friendly aesthetic. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #18161a
- background: #ffffff
- border: #ede9ff
- accent: #e7ff6e
- primary action: #4823ff (filled action)

### 3-5 Example Component Prompts
- Create a Primary Action Button: #4823ff background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Design a feature card: Lime Spritz (#e7ff6e) background, 20px radius, 30px padding. Inside, 'Grow Faster' as a 22px Inter weight 600, #18161a. Body copy at 16px Inter weight 400, #333333, line-height 1.45.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510627542-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510627542-thumb.jpg |
