# HubSpot — Refero Style

- Refero URL: https://styles.refero.design/style/3e100552-a8ad-4179-b89a-6aa5113b92e1
- Site URL: https://www.hubspot.com
- ID: 3e100552-a8ad-4179-b89a-6aa5113b92e1
- Theme: light
- Industry: saas
- Created: 2026-04-30T01:01:46.488Z
- Ranks: newest: 642, popular: 505, trending: 248

> Warm,橙色效率

## Description

HubSpot's visual system evokes a reliable, professional ecosystem with a warm, energetic core. It combines a clean, spacious light theme with strong, structured typography. Muted background tones provide a subtle backdrop for card-based content, while a vibrant orange serves as the primary accent, signaling action and branding. The overall impression is one of clarity and approachable efficiency.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #1f1f1f | neutral | Primary text, deep neutrals for icons and borders, footer background to anchor the page |
| Canvas White | #fcfcfa | neutral | Dominant page background, modal backgrounds, and interactive element fills |
| Frosted Gray | #f8f5ee | neutral | Muted text, subtle borders, and secondary background layers for visual separation |
| Midnight | #000000 | neutral | Icon fills, explicit dark text for contrast on lighter elements, and stark borders for outlined elements |
| Lead Gray | #60605f | neutral | Muted captions, helper text, and de-emphasized UI labels. Do not promote it to the primary CTA color |
| Pale Ash | #cacac8 | neutral | Subtle background for list items or decorative accents, used sparingly |
| Marketing Orange | #ff4800 | brand | Primary call-to-action buttons, prominent brand icons, and interactive states |
| Accent Violet | #0000c5 | accent | Used as a distinct accent for specific navigation items, creating visual emphasis |
| Sunset Gradient | #ff4900 | accent | Soft, multi-hued background gradient for illustrative or decorative elements, creating a sense of depth and vibrancy |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| HubSpot Sans | Inter | 300, 400, 500 | 12px, 14px, 16px, 18px, 22px, 24px, 40px | 1.10, 1.15, 1.42, 1.45, 1.56, 1.57, 1.60, 1.67, 1.75, 1.78, 2.40 | General UI text, body copy, subheadings, and most interactive elements. Its range of weights supports hierarchy within compact UI components. |
| HubSpot Serif Page Header Human | Merriweather | 500 | 80px | 1.19 | Hero page headers; its large size and distinct serif style create a strong visual statement for key messages. |
| HubSpot Serif | Merriweather | 500 | 40px, 48px | 1.10, 1.15 | Section headings and prominent feature titles; provides a refined yet impactful presence for content blocks. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.75 |  |
| body-sm | 14 | 1.78 |  |
| body | 16 | 1.6 |  |
| subheading | 18 | 1.67 |  |
| heading-sm | 22 | 1.56 |  |
| heading | 24 | 1.45 |  |
| heading-lg | 40 | 1.15 |  |
| display | 80 | 1.19 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "badges": "4px",
    "buttons": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "24px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call-to-action button for initiating primary user flows.

Filled with Marketing Orange (#ff4800), white text (#ffffff), 8px border-radius, with 16px vertical and 40px horizontal padding.

### Ghost Button (Text Link)

**Role:** Secondary action or navigational link mimicking button behavior.

Transparent background (rgba(0, 0, 0, 0)), Ink Black text (#1f1f1f), 0px border-radius. Padding varies.

### Default Card

**Role:** Container for grouped content, features, or product listings.

Canvas White background (#ffffff), 16px border-radius, no visible shadow, with 32px horizontal and 24-32px vertical padding.

### Badge Pill

**Role:** Small informational tag, often for categorization or status.

Canvas White background (#ffffff), Ink Black text (#1f1f1f), a rounded 16px border-radius, and 16px padding on all sides.

### Tag Badge

**Role:** Smaller, more compact informational tag.

Canvas White background (#ffffff), Ink Black text (#1f1f1f), a subtle 4px border-radius, and 4px vertical, 8px horizontal padding.

### Navigation Link

**Role:** Interactive text link within navigation menus.

Ink Black text (#1f1f1f) on a transparent background, 8px border-radius, with variable padding typically 8px (v) and 16px (h).

## Do's

- Always use Marketing Orange (#ff4800) for primary call-to-action buttons, ensuring a consistent visual cue for interaction.
- Apply a 16px border-radius to all content cards and larger badge elements to maintain a soft, approachable aesthetic.
- Utilize Ink Black (#1f1f1f) for main body text and prominent headings to optimize readability against light backgrounds.
- Employ HubSpot Serif Page Header Human at 80px, weight 500 for hero section headlines to create impactful, authoritative messaging.
- Maintain a clear visual hierarchy by using Canvas White (#fcfcfa) as the dominant background color for content areas, contrasting it with the footer's Ink Black (#1f1f1f).
- Separate content sections with ample vertical spacing, defaulting to a 24px section gap for comfortable visual rhythm.
- When outlining interactive elements, use Ink Black (#1f1f1f) for borders to create subtle definitions without heavy shadows.

## Don'ts

- Do not introduce new saturated primary colors; only Marketing Orange (#ff4800) and Accent Violet (#0000c5) serve chromatic roles.
- Avoid using harsh shadows; rely on clear background separation or subtle borders for element distinction instead.
- Do not deviate from the specified typographic hierarchy; specific serif and sans-serif fonts have designated roles for headlines and body text.
- Do not use generic gray buttons; if an action is not primary, use a ghost button style with Ink Black text on a transparent background.
- Do not use less than 8px border-radius for buttons; 8px is the minimum for interactive elements.
- Avoid dense, information-heavy blocks without sufficient padding; ensure cards have at least 32px horizontal and 24px vertical padding.
- Do not place body text directly on a highly saturated background; always ensure a high contrast ratio against Canvas White (#fcfcfa) or similar light neutrals, typically using Ink Black (#1f1f1f).

## Layout

The page primarily uses a max-width contained layout, though the hero section spans full-bleed with content centered over a background image. The hero features a large, centered headline followed by a centered text block and two prominent action buttons. Subsequent sections alternate between text-left/image-right compositions and 2-column or 3-column card grids, maintaining consistent vertical spacing. There are no strong visual dividers between sections; instead, the layout relies on shifts in content type and negative space. Navigation is composed of a sticky top bar with product dropdowns and right-aligned utility links.

## Imagery

The site uses a mix of real-world photography and abstract, colorful 3D illustrations. Photography tends to be lifestyle-oriented, often featuring groups of people collaborating in professional but relaxed settings, generally with natural lighting and unmasked, soft edges. Illustrations are abstract, dimensional, and vibrant, using a multi-hued gradient palette. Icons are primarily outlined or flat filled in black or Marketing Orange, maintaining a clean, utilitarian style. Imagery functions decoratively to set a mood and illustrate concepts rather than showcase product UIs directly. Density and placement vary, with a large hero image followed by blocks of text-dominant content, punctuated by smaller abstract visuals.

## Similar Brands

| Business | Why |
| --- | --- |
| Salesforce | Both use a clear, structured layout with a prominent brand color for CTAs on a predominantly light background. |
| Zendesk | Similar approach to clean, card-based content presentation and a single strong accent color highlighting key interactions. |
| Mailchimp | Employs an energetic, warm brand color (yellow/orange) to bring personality to a professional, information-dense interface, coupled with custom serif headlines. |
| monday.com | Shares a modern, light UI with distinct color accents for different functional elements, used sparingly on a clean canvas. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1f1f1f
background: #fcfcfa
border: #1f1f1f
accent: #ff4800
primary action: #ff4800 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #ff4800 background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a content card: Canvas White (#ffffff) background, 16px radius, 32px horizontal and 24px vertical padding. Headline: HubSpot Serif weight 500 at 40px, Ink Black (#1f1f1f). Body text: HubSpot Sans weight 400 at 16px, Ink Black (#1f1f1f).
3. Create a secondary ghost button: 'Learn more', transparent background, Ink Black (#1f1f1f) text, 8px radius, HubSpot Sans weight 400 at 16px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510875130-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510875130-thumb.jpg |
