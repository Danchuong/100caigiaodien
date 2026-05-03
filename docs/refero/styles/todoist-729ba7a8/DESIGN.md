# Todoist — Refero Style

- Refero URL: https://styles.refero.design/style/729ba7a8-35d5-44f3-abc0-1078ff6a3467
- Site URL: https://todoist.com
- ID: 729ba7a8-35d5-44f3-abc0-1078ff6a3467
- Theme: light
- Industry: productivity
- Created: 2026-03-10T11:21:10.000Z
- Ranks: newest: 1067, popular: 285, trending: 443

> Warm, minimal productivity suite. Like a neatly organized desk bathed in natural light.

## Description

This design system presents a clean, business-casual aesthetic, grounded in warm off-white and charcoal neutrals, punctuated by a signature vibrant red-orange. The generous use of rounded corners (15px for prominent elements, 8px for most others) softens the utilitarian feel of the task manager, while subtle, low-opacity shadows add minimal depth without visual clutter, creating an approachable, yet professional, interface.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Faded Charcoal | #25221 | neutral | Primary text, headings, icons, borders, prominent interactive elements. It's the dominant dark shade, appearing in place of true black. |
| Paper White | #fefdfc | neutral | Page backgrounds, card surfaces, primary light background. Provides a soft, warm canvas contrasting with Faded Charcoal. |
| Soft Gray | #d7d6d4 | neutral | Subtle borders, inactive elements, muted backgrounds. A pale, desaturated gray for separation without harshness. |
| Light Peach | #fff6f0 | neutral | Occasional background accents, footer background, illustration fills. A very pale, warm background hint. |
| Subtle Ash | #6f6c69 | neutral | Secondary text, descriptive elements, subdued icons. Provides hierarchy without being too light. |
| True Black | #000000 | neutral | System icons, some text elements. Used sparingly, mostly for icon rendering or specific high-contrast text. |
| Dusty Sage | #94928f | neutral | Tertiary text, subtle icon detailing. Further de-emphasizes content. |
| Action Red | #e34432 | brand | Primary call-to-action buttons, active navigation indicators, key interactive elements. This vivid red stands out against the muted palette. |
| Link Orange | #cf3520 | brand | Inline links, slightly darker shade of brand red used for text. |
| Accent Blue | #0f66ae | accent | Secondary links, distinct interactive elements. A cool counterpoint to the dominant red. |
| Teal Accent | #497d7 | accent | Specific illustrative text or decorative elements. A muted teal that occasionally appears as an accent. |
| Success Green | #4c7a45 | semantic | Success states, specific informational badges. A moderate green for positive affirmation. |
| Badge Green | #446c3d | semantic | Text color for specific badges, slightly darker than Success Green. |
| Light Green Tint | #f0f6df | semantic | Background for success badges. A very light, near-gray green. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Graphik | system-ui | 400, 600, 700 | 16px, 22px, 38px, 44px, 55px | 1.00, 1.15, 1.28 | Primary display and heading font. Used for prominent titles and key marketing messages. The slight tightening of letter spacing at larger sizes gives it a refined, bespoke feel, avoiding the sprawl of default sans-serifs. |
| Inter | system-ui | 400, 475, 500, 600, 625, 700 | 12px, 14px, 15px, 16px, 17px, 18px, 19px, 21px | 1.00, 1.35, 1.40, 1.50, 1.60, 1.75 | Primary body font, UI elements, buttons, links, and forms. Its wide range of weights and subtle tracking variations ensure readability and visual hierarchy across all transactional and informational content. |
| Arial | system-ui | 400 | 13px | 1.20 | Fallback font for specific input elements, indicating utilitarian use where broad system compatibility is prioritized over specific branding. |
| Caecilia | serif | 400 | 20px | 1.80 | Used for specific body text sections, particularly for testimonials or quotes. Its serif nature provides a distinct, classic, and editorial feel, breaking the sans-serif dominance. |
| Shantell Sans | cursive | 400 | 19px | 1.60 | Rarely used, possibly for decorative or illustrative text. Its distinct, informal style provides a whimsical contrast to the otherwise structured design. |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "badges": "6px",
    "images": "15px",
    "buttons": "15px",
    "default": "8px"
  },
  "elementGap": "4px",
  "sectionGap": "64px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Primary CTA Button Group



### Announcement Banner



### Testimonial Cards



### Primary Action Button

**Role:** Main call to action

Background: Action Red (#e34432), Text: Paper White (#ffffff), Border Radius: 15px, Padding: 12px vertical, 16px horizontal. Prominent for guiding user actions.

### Text Only Button

**Role:** Secondary action in nav/toolbar

Background: transparent, Text: Faded Charcoal (#25221e), Border: Faded Charcoal (#25221e), Border Radius: 8px, Padding: 9px vertical, 14px horizontal. Minimalist interaction for less emphasis.

### Subtle Action Button

**Role:** Tertiary actions, filters, or less critical interactions

Background: rgba(37, 34, 30, 0.07), Text: Faded Charcoal (#25221e), Border: Faded Charcoal (#25221e), Border Radius: 8px, Padding: 8px all sides. Provides a hint of background for subtle interaction.

### Hero Pill Button

**Role:** Prominent, often decorative buttons in hero sections

Background: rgba(37, 34, 30, 0.83), Text: Paper White (#ffffff), Border: Paper White (#ffffff), Border Radius: 15px, Padding: 0px vertical, 27px horizontal. Large, rounded, and dark for visual impact.

### Feature Card

**Role:** Information display, grouping related content

Background: Paper White (#fefdfc), Border Radius: 10px, Shadow: rgba(37, 34, 30, 0.04) 0px 1px 0px 0px, Padding: 0px. A clean, slightly elevated surface for content sections.

### Success Badge

**Role:** Status indicators or small informational tags

Background: Light Green Tint (#f0f6df), Text: Badge Green (#446c3d), Border Radius: 6px, Padding: 4px vertical, 8px horizontal. Clearly signals positive status.

### Form Input Field

**Role:** User data entry

Background: transparent, Text: Faded Charcoal (#25221e), Border: Faded Charcoal (#25221e), Border Radius: 8px, Padding: 7px vertical, 32px right, 35px left. Features generous horizontal padding for internal iconography or labels.

## Do's

- Use Action Red (#e34432) exclusively for primary calls-to-action and active states to maintain visual prominence.
- Apply 15px border-radius to prominent interactive elements like buttons and large images for a soft, friendly aesthetic.
- Utilize Graphik for all main headings and titles, ensuring distinct letter spacing: -0.0100em at 55px, -0.0050em at 44px, and normal at smaller sizes.
- Maintain a clear hierarchy using Paper White (#fefdfc) for backgrounds and Faded Charcoal (#25221e) for primary text and elements.
- Employ the subtle shadow rgba(37, 34, 30, 0.04) 0px 1px 0px 0px for all cards to provide slight elevation without heavy visual weight.
- Ensure generous padding on interactive elements, like 12px vertical and 16px horizontal for primary buttons, to create comfortable touch targets.

## Don'ts

- Do not use true black (#000000) for body text; instead, use Faded Charcoal (#25221e) or Subtle Ash (#6f6c69) for softer contrast.
- Avoid using multiple chromatic colors in close proximity; the palette should remain largely neutral with controlled accents.
- Do not use sharp corners; the minimum border-radius for UI elements should be 6px (for badges), with 8px and 15px being more common.
- Refrain from using heavy or multiple shadows; subtle single-layer shadows are the standard for elevation.
- Do not introduce new decorative fonts beyond Caecilia unless specifically approved; maintain the Graphik and Inter pairing.
- Avoid making inline links blend with body text; always use Link Orange (#cf3520) or Accent Blue (#0f66ae) for clear distinction.

## Layout

The page primarily uses a max-width contained layout, with content centered. The hero section often features a prominent headline and text on the left, paired with a device mockup on the right. Below the hero, the content typically alternates between text-left/image-right and text-right/image-left sections, providing an engaging rhythm. Sections are clearly delineated by consistent vertical spacing (sectionGap) and sometimes subtly different background colors (like Light Peach for the footer). There are clear examples of multi-column layouts, particularly for feature grids or testimonials (3-column layout implied by testimonial spacing). The navigation is a sticky top bar with a mix of text links and a prominent 'Start for free' button.

## Imagery

The visual language focuses on clean product screenshots of the Todoist app, often embedded within device mockups (like phones or laptops). These are typically contained within a design, not full-bleed, and often have generous rounded corners (15px). Photography is absent. Illustrations are minimal, sometimes involving abstract, squiggly lines or simple star shapes (#fff6f0 for fills) used decoratively in backgrounds, providing a touch of playfulness without being distracting. Icons are primarily line-based or solid, rendered in Faded Charcoal or True Black, often accompanying text to explain features. The overall density suggests a balance between UI elements and supportive, explanatory visuals.

## Elevation

| Element | Style |
| --- | --- |
| Feature Card | rgba(37, 34, 30, 0.04) 0px 1px 0px 0px |
| Prominent Buttons | rgba(37, 34, 30, 0.07) 0px 14px 19px -9px, rgba(37, 34, 30, 0.18) 0px 10px 48px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Asana | Shares a clean, light SaaS UI with a focus on task management tools and subtle color accents for interaction cues. |
| Notion | Employs a warm, almost-white background, minimal design, and a blend of custom and system fonts for professional clarity without appearing cold. |
| ClickUp | Utilizes a functional, modern design approach with clear typography, intuitive layouts, and controlled use of brand colors for hierarchy. |
| Monday.com | Features a light, inviting color palette, rounded elements, and a similar approach to using product screenshots within device mockups. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Primary Text:** #25221 (Faded Charcoal)
- **Background:** #fefdfc (Paper White)
- **CTA Button:** #e34432 (Action Red)
- **Border/Subtle elements:** #d7d6d4 (Soft Gray)
- **Accent Link:** #0f66ae (Accent Blue)

### 3-5 Example Component Prompts
1. **Create a Primary Action Button:** Text 'Start Now' in Inter 475 weight, color Paper White (#ffffff). Background Action Red (#e34432), border-radius 15px. Padding 12px vertical, 16px horizontal.
2. **Generate a Feature Card:** Background Paper White (#fefdfc), border-radius 10px, box-shadow rgba(37, 34, 30, 0.04) 0px 1px 0px 0px. Inside, headline 'Clarity, finally.' using Graphik 600 weight at 38px, color Faded Charcoal (#25221e). Body text 'Get things done.' in Inter 400 weight at 16px, color Subtle Ash (#6f6c69).
3. **Design a Success Badge:** Text 'New!' in Inter 400 weight, color Badge Green (#446c3d). Background Light Green Tint (#f0f6df), border-radius 6px. Padding 4px vertical, 8px horizontal.
4. **Build a subtle navigation link:** Text 'Pricing' in Graphik 400 weight at 16px, color Faded Charcoal (#25221e). Background transparent, border transparent, border-radius 8px. Padding 9px vertical, 14px horizontal.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775926103683-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775926103683-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/729ba7a8-35d5-44f3-abc0-1078ff6a3467-1777561888645-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/729ba7a8-35d5-44f3-abc0-1078ff6a3467-1777561888645-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/729ba7a8-35d5-44f3-abc0-1078ff6a3467-1777561888645-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/729ba7a8-35d5-44f3-abc0-1078ff6a3467-1777561888645-preview-detail-poster.jpg |
